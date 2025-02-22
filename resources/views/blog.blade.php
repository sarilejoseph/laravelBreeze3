@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 flex">
    <main class="flex-3 p-4">
        <article class="mb-8">
            <h2 class="text-2xl font-bold">Blog Post Title</h2>
            <p class="text-gray-600 mt-2">This is the main content of the blog post.</p>
        </article>
    </main>
    <aside class="flex-1 bg-gray-100 p-4">
        <h3 class="font-bold">Sidebar</h3>
        <p>Additional information or links go here.</p>
    </aside>
</div>
@endsection

