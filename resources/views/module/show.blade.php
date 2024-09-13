<!-- resources/views/module/show.blade.php -->

@extends('layouts.main')

@section('title', $module['title'])

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-gray-800 shadow-lg rounded-lg overflow-hidden">
        <!-- Image -->
        <img class="w-full h-64 object-cover" src="{{ asset($module['image']) }}" alt="{{ $module['title'] }}">

        <!-- Content -->
        <div class="p-6">
            <!-- Title -->
            <h1 class="text-4xl font-extrabold text-gray-200 mb-4">{{ $module['title'] }}</h1>

            <!-- Description -->
            <p class="text-lg text-gray-200 mb-6">{{ $module['description'] }}</p>

            <!-- Content Section -->
            <div class="prose prose-slate">
                {!! $module['content'] !!}
            </div>
        </div>
    </div>
</div>
@endsection
