@extends('app')

@section('content')
    <div class="relative min-h-screen py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Enhanced Header -->
            <div class="flex justify-center items-center gap-3 mb-12 group">

                <h1 class="text-4xl md:text-5xl gradient-text roboto-bold transition-all duration-300 group-hover:scale-105 group-hover:drop-shadow-[0_0_15px_rgba(255,115,0,0.7)] leading-tight">
                    Express your feelings!
                </h1>

                <!-- Underline effect -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-3/4 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-500"></div>
            </div>

            <!-- Posts Grid (same as before) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 auto-rows-fr">
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post) }}"
                       class="group relative bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-700 hover:border-purple-500">

                        <div class="h-1 w-full bg-gradient-to-r from-purple-500 to-pink-500"></div>

                        <div class="p-6">
                            <div class="mb-4 text-gray-400 group-hover:text-purple-400 transition-colors">
                                <x-s-v-g-s.message-icon height="48" width="48" class="mx-auto" />
                            </div>

                            <h2 class="text-xl font-bold text-white mb-2 line-clamp-2 group-hover:text-purple-300">
                                {{ $post->title }}
                            </h2>

                            <p class="text-sm text-gray-400 mb-3">
                                Category:
                                <span class="font-semibold text-purple-400">{{ $post->category->name }}</span>
                            </p>

                            <p class="text-gray-300 text-sm line-clamp-3">
                                {{ $post->text }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Floating Action Button (unchanged) -->
            <a href="{{ route('posts.create') }}"
               class="fixed bottom-6 right-6 flex items-center justify-center w-14 h-14 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900 group"
               aria-label="Create new post">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span class="absolute right-full mr-3 bg-gray-800 text-white text-sm px-3 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-gray-700">
                    Create Post
                </span>
            </a>
        </div>
    </div>
@endsection
