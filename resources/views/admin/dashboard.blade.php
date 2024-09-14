@extends('layouts.admin') <!-- Assuming you have a base admin layout -->

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Users</h1>

    <a href="/admin/add" class="btn p-2 btn-success my-3"> + Add user</a>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Username</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Role</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $user->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $user->username }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $user->role }}</td>
                    <td class="px-6 py-4 text-sm font-medium">
                        <!-- <form action="{{ route('admin.post.accept', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-green-500 hover:text-green-700">edit</button>
                        </form> -->
                        <form  method="POST" class="inline ml-4">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-red-500 hover:text-red-700">hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1 class="text-2xl font-bold my-6 mb-6">Course</h1>

    <a href="/course/add" class="btn p-2 btn-success my-3"> + Add Course</a>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">start date</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">end date</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course as $c)
                <tr class="border-b">
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->description }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->start_date }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $c->end_date }}</td>
                    <td class="px-6 py-4 text-sm font-medium">
                        <!-- <form action="{{ route('admin.post.accept', $c->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-green-500 hover:text-green-700">edit</button>
                        </form> -->
                        <form  method="POST" class="inline ml-4">
                            @csrf
                            @method('POST')
                            <button type="submit" class="text-red-500 hover:text-red-700">hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
