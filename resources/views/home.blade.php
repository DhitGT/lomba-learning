@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
<div class="container" >
    <!-- jumbo -->
    <div >
        <section class="relative min-h-[100vh] min-w-[100vw] pt-24 md:pt-0 transition-opacity duration-500 ease-in-out">
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>

            <video id="background-video" autoplay muted playsinline class="absolute inset-0 w-full h-full object-cover z-0 transition-opacity duration-1000 opacity-100">
                <source id="video-source" src="{{ asset('video/jumbo-bg.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="relative z-20 px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Learning Management System
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                    Learning How To Code from experts, and Share your knowledge with others
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSdH5ainp7B7cj1kLM4UuAsTtGDs5U2RwPFDc1kRVJUoPLDn9g/viewform" target="_blank"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#80AF81] hover:bg-[#508D4E]">
                        <span class="text-white">Sharing</span>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a> -->
                    <!-- <a href="/logout"
                        class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-[#80AF81] rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        <span class="text-[#80AF81]">Learn More</span>
                    </a> -->
                </div>
            </div>
        </section>
    </div>
    <!-- jumbo -->
    <div class="relative overflow-hidden bg-[#F4F4F4]">
        <div class="absolute inset-x-0 bottom-0 -z-10">
            <img src="{{ asset('wave-haikei.svg') }}" alt="Wave Background" class="w-full h-auto">
        </div>
    </div>
    <!-- asking user -->
    <!-- <div class="min-w-[100vw]">
        <div class="flex max-w-fit flex-col mx-auto my-11">
            <p data-aos="fade-up" class="my-3 text-3xl font-semibold leading-relaxed text-gray-900 dark:text-white text-center">Hello, what do you want to do today?</p>
            <div class="flex gap-3 justify-between">
                <a data-aos="fade-right" href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sharing</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Share Your Knowledge with others</p>
                </a>
                <a data-aos="fade-left" href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Learning</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Learn new skills from experts</p>
                </a>
            </div>
        </div>
    </div> -->
    <!-- asking user -->

    <!-- learning module -->
    <div class="min-w-[100vw] my-4">
        <div class="d-flex">
            <form class="max-w-[80vw] mx-auto">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Search</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button></li>
                            <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button></li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Belajar Javascript, php, c++ ..." required />
                        <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- card untuk modul -->
        <div class="row mx-auto max-w-[80vw] my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($modules as $module)
            <a href="/course/{{ $module->id }}" class="group relative block overflow-hidden rounded-lg border border-gray-200 bg-white shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <!-- <img src="{{ '/storage/' . $module->imageCover }}" alt="{{ $module->title }}" class="h-36 w-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" /> -->
                <div class="p-6">
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $module->name }}</h5>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ $module->description }}</p>
                </div>

            </a>
            @endforeach
        </div>
        <!-- card untuk modul -->
    </div>
@endsection
