@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-20">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data" class="space-y-12">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="flex justify-start mt-20">
            <label class="w-44 items-center px-5 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue-500 cursor-pointer inline-block">
                <span class="text-base leading-normal">Select a file</span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>
    </form>
</div>
@endsection
