@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-highlights">Contact Us</h2>
    <form action="#" method="POST" class="max-w-lg mx-auto space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-accent mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full p-3 rounded bg-background border border-accent text-text focus:outline-none" required>
        </div>
        <div>
            <label for="email" class="block text-accent mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full p-3 rounded bg-background border border-accent text-text focus:outline-none" required>
        </div>
        <div>
            <label for="message" class="block text-accent mb-2">Message</label>
            <textarea id="message" name="message" rows="5" class="w-full p-3 rounded bg-background border border-accent text-text focus:outline-none" required></textarea>
        </div>
        <div>
            <button type="submit" class="bg-accent text-background px-6 py-3 rounded hover:bg-blue-600 transition">Submit</button>
        </div>
    </form>
@endsection
