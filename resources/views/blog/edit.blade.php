@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-6xl">
            Edit Post
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
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-0 border-b-2 border-gray-300 w-full h-20 text-6xl outline-none mb-12 shadow-md">

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-transparent block border-0 border-b-2 border-gray-300 w-full h-60 text-xl outline-none mb-12 shadow-md resize-none">{{ $post->description }}</textarea>

        <div class="flex justify-start pb-10">

            <div class="py-5 pl-10">
                <input type="checkbox" name="promoted_checkbox" value="1" class=" size-4" id="is_promoted" {{ $post->is_promoted ? "checked" : ""}}>
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
