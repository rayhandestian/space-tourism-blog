@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative">
        <img src="{{ asset('images/space-hero.webp') }}" alt="Space" class="w-full h-96 object-cover rounded-lg">
        <div class="absolute inset-0 bg-black opacity-50 rounded-lg"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-highlights px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Explore Space Tourism</h1>
            <p class="text-xl md:text-2xl mb-6">Your gateway to the stars</p>
            <a href="{{ route('blog') }}" class="bg-accent text-background px-6 py-3 rounded-full hover:bg-blue-200 transition">Read Our Blog</a>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="mt-12">
        <h2 class="text-2xl font-semibold mb-6 text-highlights">Featured Post</h2>
        <div class="flex flex-col md:flex-row bg-accent rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset($featuredPost['image']) }}" alt="{{ $featuredPost['title'] }}" class="w-full md:w-1/2 h-64 object-cover">
            <div class="p-6 text-background">
                <h3 class="text-3xl font-bold mb-2">{{ $featuredPost['title'] }}</h3>
                <p class="mb-4">{{ $featuredPost['summary'] }}</p>
                <a href="{{ route('singlePost', $featuredPost['id']) }}" class="bg-background text-accent px-4 py-2 rounded hover:bg-gray-800 transition">Read More</a>
            </div>
        </div>
    </section>

    <!-- Latest Posts -->
    <section class="mt-12">
        <h2 class="text-2xl font-semibold mb-6 text-highlights">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
                <div class="bg-background rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">{{ $post['title'] }}</h3>
                        <p class="mb-4">{{ $post['summary'] }}</p>
                        <a href="{{ route('singlePost', $post['id']) }}" class="bg-accent text-background px-4 py-2 rounded hover:bg-blue-600 transition">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
