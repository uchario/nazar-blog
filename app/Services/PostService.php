<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostService
{
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }
    
    public function create($data)
    {
        $newImageName = uniqid() . '-' . $data['title'] . '.' . $data['image']->extension();

        $data['image']->move(public_path('images'), $newImageName);
        
        $this->model->title = $data['title'];
        $this->model->description = $data['description'];
        $this->model->slug = SlugService::createSlug(Post::class, 'slug', $data['title']);
        $this->model->image_path = $newImageName;
        $this->model->user_id = auth()->user()->id;
        $post = $this->model->save();

        if ($post) {
            return $post;
        }
    }


    public function update($data, $slug)
    {
        $post = $this->model->where('slug', $slug)->findorfail();
        /*
        Post::where('slug', $slug)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'slug' => SlugService::createSlug(Post::class, 'slug', $data['title']),
            'user_id' => auth()->user()->id
        ]);
        */

        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->slug = SlugService::createSlug(Post::class, 'slug', $data['title']);
        $post->user_id = auth()->user()->id;
        $post->save();

        if ($post) {
            return $post;
        }

    }

} 