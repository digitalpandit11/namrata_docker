@extends('admin.layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <img src="{{ asset('favicon.png') }}" alt="" class="w-12 h-12 mx-auto mb-3">
            <h1 class="text-2xl font-semibold">BluBoxx Admin</h1>
            <p class="text-sm text-gray-500 mt-1">Sign in to continue</p>
        </div>

        <form method="POST" action="{{ route('admin.login.submit') }}" class="bg-white shadow rounded-lg p-8 space-y-5">
            @csrf

            @if ($errors->any())
                <div class="rounded-md bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <div>
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                       class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                       class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            </div>

            <label class="flex items-center gap-2 text-sm text-gray-600">
                <input type="checkbox" name="remember" value="1" class="rounded border-gray-300" {{ old('remember') ? 'checked' : '' }}>
                Remember me
            </label>

            <button type="submit"
                    class="w-full rounded-md bg-brand-500 hover:bg-brand-600 text-white font-medium py-2.5 transition-colors">
                Log in
            </button>
        </form>
    </div>
</div>
@endsection
