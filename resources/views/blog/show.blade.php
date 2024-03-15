@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-bold text-gray-800 mt-8">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 mx-auto pt-10">
    <div class="flex items-center justify-between">
        <p class="text-xl text-gray-500 font-bold uppercase text-shadow-md">
            {{ $post->blogtitle }}
        </p>
        <span class="text-gray-500 text-sm">
            By <span class="font-bold italic">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
    </div>

    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="mt-8 rounded-lg w-full blogImage mx-auto">

    
    <div class="w-4/5 m-auto pt-8">
        @php
            $paragraphs = explode("\n", $post->description);
        @endphp
    
        @foreach ($paragraphs as $paragraph)
            <p class="text-lg text-gray-700 leading-8 pb-4">{{ $paragraph }}</p>
        @endforeach
    </div>
</div>

@endsection
