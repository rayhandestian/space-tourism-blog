@extends('layouts.app')

@section('content')
    <article class="mb-12">
        <h1 class="text-3xl font-bold mb-4 text-highlights">{{ $post['title'] }}</h1>
        <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="text-highlights">
            {!! nl2br(e($post['content'])) !!}
        </div>
    </article>

    <!-- Related Posts -->
    <section>
        <h2 class="text-2xl font-semibold mb-6 text-highlights">Related Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedPosts as $related)
                <div class="bg-background rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset($related['image']) }}" alt="{{ $related['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">{{ $related['title'] }}</h3>
                        <a href="{{ route('singlePost', $related['id']) }}" class="bg-accent text-background px-4 py-2 rounded hover:bg-blue-600 transition">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
