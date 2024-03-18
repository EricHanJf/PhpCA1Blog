@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl pagetitle font-bold ">
                Welcome to my Blog
            </h1>
        </div>
    </div>
    <div class="w-4/5 m-auto pt-10">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search..." class="border border-gray-400 p-2">
            <button type="submit" class="bg-blue-500 text-white p-2">Search</button>
        </form>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div class="blogPageImg">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on
                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ Str::limit($post->description, 200) }}
                    @if (strlen($post->description) > 200)
                        <span id="more_{{ $post->id }}" style="display: none;">
                            {{ substr($post->description, 200) }}
                        </span>
                        <a href="#" onclick="toggleReadMore({{ $post->id }});"
                            id="read_more_link_{{ $post->id }}">Read More</a>
                    @endif
                </p>

                <a href="/blog/{{ $post->slug }}"
                    class="uppercase bg-orange-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Keep Reading
                </a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a href="/blog/{{ $post->slug }}/edit"
                            class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                            Edit
                        </a>
                    </span>

                    <span class="float-right">
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="text-red-500 pr-3" type="submit">
                                Delete
                            </button>

                        </form>
                    </span>
                @endif
            </div>
        </div>
    @endforeach

    <script>
        function toggleReadMore(postId) {
            event.preventDefault();
            var dots = document.getElementById("more_" + postId);
            var moreText = document.getElementById("read_more_link_" + postId);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.innerHTML = "Read Less";
            } else {
                dots.style.display = "none";
                moreText.innerHTML = "Read More";
            }
        }
    </script>
@endsection
