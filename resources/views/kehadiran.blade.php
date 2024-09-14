@extends('layouts.main')

@section('title', 'Create Module')

@section('content')
<div class="container mx-auto p-4 ">
    <div class="max-w-[70vw] mx-auto bg-gray-800 rounded-xl p-8">
        <h1 class="text-2xl font-bold mb-4">Attendance (Kehadiran)</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('kehadiran.data') }}" method="POST" enctype="multipart/form-data">

            <div class="mb-4">
                <label for="course" class="block text-sm font-medium text-gray-200">Course</label>
                <input type="date" id="course" name="course" value="{{ old('course') }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-200">Name Student</label>
                <input type="date" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-sm font-medium text-gray-200">Date</label>
                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-sm font-medium text-gray-200">Status</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create Module
            </button>
        </form>
    </div>
</div>

<!-- TinyMCE Script -->
<script src="https://cdn.tiny.cloud/1/1vh79zsuthzr11yw9v9to8d2vdh565ob17lomk5ldjjot9sv/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | removeformat | help',
        content_css: 'https://www.tiny.cloud/css/codepen.min.css',
    });
</script>
@endsection
