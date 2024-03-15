@extends('layouts.app')

@section('content')
<div class="bg-blue-100">
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl text-gray-800 font-bold text-center mt-5">
                Update My Blog
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
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-10">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $post->title }}"
                class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">

            <input type="text" name="blogtitle" value="{{ $post->blogtitle }}"
                class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">

            <textarea name="description" placeholder="Description..."
                class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none" style="min-height: 200px;">{{ $post->description }}</textarea>

            <div class="flex justify-end pt-5">
                <button type="submit"
                    class="uppercase bg-blue-500 text-white text-lg font-bold py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Submit Post
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
