@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <figure class="text-center">
        <img src="{{ asset('images/sample.jpg') }}" alt="Sample Image" class="mx-auto">
        <figcaption class="text-gray-600 mt-2">Sample Image</figcaption>
    </figure>
    <div class="mt-8 text-center">
        <video controls class="mx-auto">
            <source src="{{ asset('videos/sample.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
@endsection

