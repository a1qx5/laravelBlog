@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href=""
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="pb-10 pt-10">
            <img src="https://cdn.pixabay.com/photo/2016/01/19/15/05/computer-1149148_1280.jpg" width="700" alt=""/>
        </div>

        <div class="m-auto sm:auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray">
                Struggling to be a better web developer?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consequuntur cumque quia.
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white pb-10 pt-10">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-3xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Backend development
        </span>
    </div>
@endsection