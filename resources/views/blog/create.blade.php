@extends('layouts.app')

@section('content')
    <div class="bg-blue-100">
        <div class="w-4/5 m-auto text-left">
            <div class="py-15">
                <h1 class="text-6xl text-gray-800 font-bold text-center mt-5">
                    Create a Travel Blog
                </h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-full mb-4 text-gray-50 bg-red-700 rounded-lg py-4 px-6">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-2/3 m-auto pt-20">
            <form action="/blog" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-10">
                @csrf

                <input type="text" name="title" placeholder="Title..."
                    class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">

                <input type="text" name="blogtitle" placeholder="Blog Title..."
                    class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">

                <textarea name="description" placeholder="Description..."
                    class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none" style="min-height: 200px;"></textarea>

                <div class="bg-grey-lighter pt-5">
                    <label
                        class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class=" text-base leading-normal">
                            Select a file
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>

                <div class="flex justify-end pt-5">
                    <button type="submit"
                        class="uppercase bg-blue-500 text-white text-lg font-bold py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Submit Post
                    </button>
                </div>
                <div class="mt-8 text-center">
                    <p class="text-gray-800 mb-2">Ready to explore more travel adventures?</p>
                    <a href="/blog" class="text-blue-600 hover:underline">Browse our latest blog posts</a>
                </div>
            </form>
            @if (session('success'))
                <div class="mt-8 bg-green-200 text-green-800 p-4 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-9 text-center">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tips for creating a great travel blog post:</h2>
                    <p class="  text-gray-700 mb-2 text-center">Include a catchy title that captures the essence of your travel experience.</p>
                    <p class="  text-gray-700 mb-2 text-center">Add a descriptive blog title that provides insight into the destination or theme of your post.</p>
                    <p class="  text-gray-700 mb-2 text-center">Write a compelling description that highlights the highlights of your trip and engages readers.</p>
                    <p class="  text-gray-700 text-center">Select an eye-catching image that showcases the beauty of your destination.</p>
            </div>
    </div>
@endsection
