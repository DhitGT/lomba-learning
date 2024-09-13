@extends('layouts.admin') <!-- Assuming you have a base admin layout -->

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Post Requests</h1>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Title</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="border-b">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $post->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $post->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $post->description }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $post->status }}</td>
                    <td class="px-6 py-4 text-sm font-medium">
                        <form action="{{ route('admin.post.accept', $post->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-green-500 hover:text-green-700">Accept</button>
                        </form>
                        <form action="{{ route('admin.post.reject', $post->id) }}" method="POST" class="inline ml-4">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-red-500 hover:text-red-700">Reject</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
