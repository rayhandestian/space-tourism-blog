@extends('layouts.app')

@section('content')
    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-6 text-highlights">About Us</h2>
        <p class="text-highlights mb-6">Exploring the universe of space tourism. Our mission is to bring you the latest news, insights, and stories about the exciting world of space travel and tourism.</p>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-6 text-highlights">Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($team as $member)
                <div class="bg-background rounded-lg overflow-hidden shadow-lg text-center p-4">
                    <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
                    <h3 class="text-xl font-bold text-highlights">{{ $member['name'] }}</h3>
                    <p class="text-accent">{{ $member['role'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
