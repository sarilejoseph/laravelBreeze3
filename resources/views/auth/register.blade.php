@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md mt-8">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="w-full border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="w-full border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="w-full border-gray-300 rounded-lg">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            Register
        </button>
    </form>
</div>
@endsection

