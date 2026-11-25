@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<p class="mb-6 text-gray-600">Welcome back, {{ auth()->user()->name }}.</p>

<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Blog posts</p>
        <p class="text-3xl font-semibold mt-1">{{ $postCount }}</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Admin users</p>
        <p class="text-3xl font-semibold mt-1">{{ $adminCount }}</p>
    </div>
</div>
@endsection
