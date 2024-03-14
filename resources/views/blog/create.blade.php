@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl text-gray-800 font-bold">
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

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white shadow-md rounded-lg p-8">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">

        <input 
            type="text"
            name="blogtitle"
            placeholder="Blog Title..."
            class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none">   

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-gray-100 rounded-lg mb-4 py-3 px-4 w-full text-xl outline-none"
            style="min-height: 200px;"></textarea>

            <div class="bg-grey-lighter pt-5">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input 
                        type="file"
                        name="image"
                        class="hidden">
                </label>
            </div>

        <div class="flex justify-end pt-5">
            <button    
                type="submit"
                class="uppercase bg-blue-500 text-white text-lg font-bold py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Submit Post
            </button>
        </div>
    </form>
</div>

@endsection
