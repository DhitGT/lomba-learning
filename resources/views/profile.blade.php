@extends('layouts.noftr')

@section('title', 'User Profile')

@section('content')
<div class="container mx-auto p-4">
    <div class="max-w-[70vw] mx-auto">
        <div class="bg-gray-800 rounded-xl p-8">

            <div class="flex items-center mb-6">
                <img src="{{ $user->profile_picture ? $user->profile_picture : '/pfp.PNG'  }}" alt="{{ $user->name }}" class="w-32 h-32 rounded-full border border-gray-300 shadow-md mr-4">
                <div>
                    <h1 class="text-xl font-semibold">{{ $user->name }}</h1>
                    <p class="text-sm text-gray-600">{{ '@' . $user->username }}</p>
                    <p class="mt-2">{{ $user->bio }}</p>
                </div>
            </div>
        </div>

        <!-- <h3 class="text-lg font-semibold mb-4 mt-8">Modules Created</h3> -->
        <div class="row mx-auto max-w-[80vw] my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($modules as $module)
            <div data-aos="fade-down" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                <a  href="/module/{{ $module->id }}" class="block overflow-hidden">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="{{ '/storage/' . $module->imageCover }}" alt="{{ $module->title }}" />
                </a>
                <div class="p-5 flex flex-col flex-grow">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $module->title }}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{ $module->description }}
                    </p>
                    <br>
                   
                </div>
            </div>
            @endforeach
            
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <a href="/logout">
                    Logout
                </a>
            </p>
            
        </div>
    </div>
</div>
@endsection
