@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-highlights">Blog</h2>
    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="bg-background rounded-lg overflow-hidden shadow-lg flex flex-col md:flex-row">
                <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full md:w-1/3 h-48 object-cover">
                <div class="p-4 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold mb-2">{{ $post['title'] }}</h3>
                        <p class="mb-4">{{ $post['summary'] }}</p>
                        <span class="inline-block bg-accent text-background px-2 py-1 rounded-full text-sm">{{ $post['category'] }}</span>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('singlePost', $post['id']) }}" class="bg-accent text-background px-4 py-2 rounded hover:bg-blue-600 transition">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
