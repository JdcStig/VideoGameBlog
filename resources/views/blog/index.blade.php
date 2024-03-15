@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<form action="{{ route('blog.index') }}" method="GET" class="w-4/5 m-auto mt-5 text-right">
    
    <label class="font-bold italic text-gray-800" for="search">Search:</label>
    <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search posts...">
    <button type="submit">Search</button>
    
    
    <label class="font-bold italic text-gray-800" for="sort">Sort by:</label>
    <select name="sort" id="sort" onchange="this.form.submit()">
        <option value="">Select</option>
        <option value="topic_asc" @if(request('sort') == 'topic_asc') selected @endif>Topic (Ascending)</option>
        <option value="topic_desc" @if(request('sort') == 'topic_desc') selected @endif>Topic (Descending)</option>
        <option value="date_asc" @if(request('sort') == 'date_asc') selected @endif>Date (Ascending)</option>
        <option value="date_desc" @if(request('sort') == 'date_desc') selected @endif>Date (Descending)</option>
    </select>

    <label class="font-bold italic text-gray-800" for="topic">Filter by Topic:</label>
    <select name="topic" id="topic" onchange="this.form.submit()">
        <option value="">All Topics</option>
        @foreach($topics as $topic)
            <option value="{{ $topic }}" @if(request('topic') == $topic) selected @endif>{{ $topic }}</option>
        @endforeach
    </select>




@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    
        <a 
            href="/blog/create"
            class="yellow uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Create post
        </a>
    
@endif

</form>



@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-mine mx-auto py-15 border-b border-gray-200">
        <div class="blogimg">
            <img src="{{ asset('images/' . $post->image_path) }}" width="450px" alt="">
        </div>
        <div>
            <h2 class="Blog-Title">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>
            </span>
<div>
            <span class="text-gray-500">
                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
</div>

            <p class="text-gray-500">
               Topic: {{ $post->topic }}
            </p>

            <p class="text-xl text-black-mine pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="yellow uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection