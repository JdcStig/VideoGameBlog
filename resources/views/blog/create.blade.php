@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none black">


            <div class = dropdown>
            <label for="Topic" class="text-choosetopic">Choose a Topic:</label>
            <select name="Topic" id="genre" class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">


                <option value="action">Fallout 1</option>
                <option value="comedy">Fallout 2</option>
                <option value="drama">Fallout 3</option>
                <option value="drama">Fallout New Vegas</option>
                <option value="drama">Fallout 4</option>
                <option value="drama">Fallout 76</option>
                <option value="drama">Fallout tv series</option>
                <option value="drama">Fallout news</option>
            </select>
</div>



<div class="check-list">
    <label class="text-choosetopic">Select Categories:</label>
    <div>

        <input type="checkbox" name="categories[]" value="item" class="mr-2">
        <label for="item" class="mr-4">Item</label>

        <input type="checkbox" name="categories[]" value="random_encounter" class="mr-2">
        <label for="random_encounter" class="mr-4">Random Encounter</label>

        <input type="checkbox" name="categories[]" value="lore" class="mr-2">
        <label for="lore" class="mr-4">Lore</label>

        <input type="checkbox" name="categories[]" value="lore" class="mr-2">
        <label for="lore" class="mr-4">Companion</label>

        <input type="checkbox" name="categories[]" value="lore" class="mr-2">
        <label for="lore" class="mr-4">Enemy</label>
        
        <input type="checkbox" name="categories[]" value="lore" class="mr-2">
        <label for="lore" class="mr-4">Other</label>

    </div>
</div>


        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <div class="media">
        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>


        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a Video
                </span>
                <input 
                    type="file"
                    name="video"
                    accept="video/*"
                    class="hidden">
            </label>
        </div>

            </div>


        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection
