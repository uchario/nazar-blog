@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 w-4/5 block text-center ">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a developer</h1>
                <a href="{{ route('blog.index') }}" class="text-center bg-gray-200 text-gray-700 py-2 px-4 font-bold text-ul uppercase rounded-2xl hover:bg-gray-100 active:bg-gray-300">Read more</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 my- border-b border-gray-300 bg-gray-200">
        <div class="mx-auto">
            <img src="https://cdn.pixabay.com/photo/2015/03/26/10/25/apple-691323_1280.jpg" width="700" alt="" class="p-10">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem Lorem officia occaecat quis labore officia mollit elit voluptate magna nisi amet anim.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl hover:bg-blue-400 active:bg-blue-600 shadow-md">
                Find Out More
            </a>
        </div>
    </div>
    
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">I'm an expert in...</h2>
        <span class="font-extrabold block text-4xl py-1">PHP</span>
        <span class="font-extrabold block text-4xl py-1">Laravel</span>
        <span class="font-extrabold block text-4xl py-1">Digital Strategy</span>
        <span class="font-extrabold block text-4xl py-1">Backend Development</span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-xl text-gray-400">
            <a href="{{ route('blog.index') }}" class="hover:underline">Blog</a>
        </span>

        <h2 class="text-4xl font-bold py-10">Recent Posts</h2>

        <p class="m-auto w-4/5 text-gray-500">Nostrud sit laborum irure consectetur culpa nulla.</p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">PHP</span>
                <h3 class="text-xl font-bold py-10">Esse ad Lorem sit ullamco aute amet laborum. Lorem quis sit cupidatat cupidatat ipsum tempor exercitation sunt magna. Voluptate amet enim laboris fugiat fugiat tempor consequat ea incididunt mollit non.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 textg=-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-yellow-600 active:bg-yellow-800 shadow-md">Find Out More</a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/06/08/07/25/bear-2382779_1280.jpg" width="700" alt="" class="">
        </div>
    </div>
@endsection