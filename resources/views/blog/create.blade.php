@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 text-center rounded-2xl py-4">
                {{ $error }}
            </li>
            
            @endforeach
        </ul>
    </div>

@endif

<div class="w-4/5 m-auto pt-10">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-0 border-b-2 border-gray-300 w-full h-20 text-6xl outline-none mb-12 shadow-md">

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-transparent block border-0 border-b-2 border-gray-300 w-full h-60 text-xl outline-none mb-12 shadow-md resize-none"></textarea>

        <div class="flex justify-start pb-10">
            <label class="w-44 flex items-center justify-center px-3 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue-500 cursor-pointer text-center">
                <span class="text-base leading-normal">Select a file</span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>

            <div class="py-5 pl-10">
                <input type="checkbox" name="promoted_checkbox" value="1" class=" size-4" id="is_promoted">
                <label for="is_promoted" class=" font-extrabold text-xl">Promote your post!</label>
            </div>

            <button 
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl ml-auto">
                Submit Post
            </button>
        </div>
    </form>
</div>
@endsection
