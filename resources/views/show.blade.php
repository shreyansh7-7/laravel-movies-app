@extends('layouts.main')

@section('content')
    <div class="movie-info border-b boorder-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/avatar.jpg" alt="Details.Image" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    Movie Name 
                </h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FFA500"/>
                    </svg>
                    <span class="ml-1">
                        85%
                    </span>
                    <span class="mx-2">
                        |
                    </span>
                    <span>
                        Feb 28, 2024
                    </span>
                    <span class="mx-2">
                        |
                    </span>
                    <div class="text-gray-400 ">
                        Action, Thriller, Comedy
                    </div>
                </div>
                <p class="text-gray-300 mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, consequatur? Error deleniti ab quae vel accusantium, facere ratione, illum inventore voluptate nobis magni, fuga quis blanditiis molestias repudiandae quo saepe.
                </p>
                <div class="mt-12">
                    <h4 class="text-whit font-semibold">
                        Featured Cast
                    </h4>
                    <div class="flex flex-wrap mt-4">
                        <div class="mx-4">
                            <div>
                                Actor Name
                            </div>
                            <div class="text-sm text-gray-400">
                                ScreenPlay, Director, Story
                            </div>
                        </div>
                        <div class="mx-4">
                            <div>
                                Actor Name
                            </div>
                            <div class="text-sm text-gray-400">
                                ScreenPlay, Director, Story
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex flex-wrap items-center bg-orange-400 text-gray-900 font-semibold px-5 py-3 hover:bg-orange-500 transition ease-in-out duration-150">
                        <svg class="w-5 mt-0.5 fill-current" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a2.958 2.958 0 00-2.081-2.081C19.767 3.444 12 3.444 12 3.444s-7.767 0-9.417.661A2.958 2.958 0 00.502 6.186C0 7.835 0 12 0 12s0 4.165.502 5.814a2.958 2.958 0 002.081 2.081C4.233 20.556 12 20.556 12 20.556s7.767 0 9.417-.661a2.958 2.958 0 002.081-2.081C24 16.165 24 12 24 12s0-4.165-.502-5.814zM9.546 15.568V8.432L15.818 12 9.546 15.568z" fill="#FF0000"/>
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">
                Cast
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12">
            <div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div><div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div><div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div><div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div><div class="mt-6">
                <a href="#">
                    <img src="/img/avatar.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-1 text-sm">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">
                        Actor Name
                    </a>
                    <div class="text-gray-400 ">
                        Real Name
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
