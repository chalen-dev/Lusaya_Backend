@extends('app')

@section('title', 'Edit Post')

@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <!-- Header with icon -->
            <div class="flex items-center gap-3 mb-8">
                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <h1 class="text-4xl font-bold gradient-text roboto-bold">Edit Post</h1>
            </div>

            <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title field -->
                <div>
                    <x-input.text
                        label="Post Title"
                        id="title"
                        name="title"
                        value="{{ $post->title }}"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors"
                    />
                </div>

                <!-- Category field -->
                <div>
                    <x-input.select
                        label="Category"
                        id="category_id"
                        name="category_id"
                        value="{{ $post->category_id }}"
                        :options="$categories"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl text-white focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors"
                    />
                </div>

                <!-- Text area -->
                <div>
                    <x-input.text-area
                        label="Text"
                        id="text"
                        name="text"
                        value="{{ $post->text }}"
                        placeholder="What's on your mind?"
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors resize-none"
                        rows="5"
                    />
                </div>

                <!-- Form actions -->
                <div class="flex items-center justify-between pt-4">
                    <a href="{{ route('posts.show', $post) }}"
                       class="text-gray-400 hover:text-purple-400 transition-colors inline-flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                        Update Post
                    </button>
                </div>
            </form>

            <!-- Subtle decoration -->
            <p class="text-center text-xs text-gray-600 mt-8">Make your post even better.</p>
        </div>
    </div>
@endsection
