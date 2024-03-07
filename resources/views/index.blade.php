@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to a world where pixels come to life and adventures await on our video game blog!
                </h1>
              
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img id="page1iconic" src="https://wallpaper.dog/large/963062.jpg" width="1000px" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Welcome to the Fallout Univrese!! 
            </h2>
            
            <p class="py-10 text-gray-500 text-l">
                Fallout 4 is a post-apocalyptic action role-playing game set in a retro-futuristic open world. The game takes place in the year 2287 in the aftermath of a nuclear war, with the player character emerging from a vault to explore the wasteland of the Commonwealth, which is based on the area around Boston, Massachusetts. The main storyline revolves around the protagonist's search for their missing son, encountering various factions, mutants, and other survivors along the way. Players can engage in combat, build settlements, and make choices that affect the outcome of the game.
            </p>

            <p class="green">
                To view our articles click the button bellow
            </p>

            <a 
                href="/blog"
                class="yellow uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="yellow text-center p-15 bg-blue-900 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
         Latest News 
        </span>
        <span class="font-extrabold block text-4xl py-1">
              From
           </span>
           <span class="font-extrabold block text-4xl py-1">
             THE WASTE LANDS
          </span>
    </div>

    <div class="text-center py-15">
        

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            View and share your experiences and opinions here
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Have you had an interesting experience or encounter? Are you looking for fellow fallout community members? Click the button bellow to discover new members.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://images7.alphacoders.com/131/1317150.png" >
        </div>
    </div>
@endsection