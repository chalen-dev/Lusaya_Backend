@extends('app')

@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- Back link -->
            <a href="{{ route('posts.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-purple-400 transition-colors mb-6 group">
                <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to all posts
            </a>

            <!-- Post card -->
            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-xl border border-gray-700 overflow-hidden">
                <!-- Header with category accent -->
                <div class="h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>

                <div class="p-8">
                    <!-- Title -->
                    <h1 class="text-4xl font-bold gradient-text roboto-bold mb-4">{{ $post->title }}</h1>

                    <!-- Category -->
                    <div class="flex items-center gap-2 text-sm text-gray-400 mb-6">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        <span>Category:</span>
                        <span class="font-semibold text-purple-400">{{ $post->category->name }}</span>
                    </div>

                    <!-- Content -->
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-300 text-lg leading-relaxed whitespace-pre-wrap break-words">{{ $post->text }}</p>
                    </div>

                    <!-- Action buttons -->
                    <div class="flex items-center gap-4 pt-8 mt-6 border-t border-gray-700">
                        <a href="{{ route('posts.edit', $post) }}"
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-800 hover:bg-gray-700 text-gray-200 font-medium rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit Post
                        </a>

                        <x-buttons.delete
                            action="posts.destroy"
                            :params="$post"
                            label="Delete Post"
                            item_name="Post"
                        />
                    </div>
                </div>
            </div>

            <!-- Optional metadata -->
            <div class="text-xs text-gray-600 mt-4 text-right">
                Created: {{ $post->created_at->format('F j, Y') }}
            </div>
        </div>
    </div>
@endsection
