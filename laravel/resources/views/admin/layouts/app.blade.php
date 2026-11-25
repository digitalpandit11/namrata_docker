<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') | BluBoxx Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">

    @auth
        <div class="flex min-h-screen">
            {{-- Sidebar --}}
            <aside class="w-64 bg-dark text-white flex-shrink-0 hidden md:flex md:flex-col">
                <div class="h-16 flex items-center px-6 border-b border-white/10">
                    <a href="{{ route('admin.dashboard') }}" class="text-lg font-semibold">
                        BluBoxx <span class="text-brand-400">Admin</span>
                    </a>
                </div>
                <nav class="flex-1 px-3 py-4 space-y-1 text-sm">
                    <a href="{{ route('admin.dashboard') }}"
                       class="block px-3 py-2 rounded-md {{ request()->routeIs('admin.dashboard') ? 'bg-brand-500 text-white' : 'text-gray-300 hover:bg-white/10' }}">
                        Dashboard
                    </a>
                    {{-- Add more admin links here (Posts, Job applications, ...) --}}
                </nav>
            </aside>

            <div class="flex-1 flex flex-col">
                {{-- Top bar --}}
                <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
                    <h1 class="text-lg font-semibold">@yield('title', 'Admin')</h1>
                    <div class="flex items-center gap-4 text-sm">
                        <span class="text-gray-600">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="px-3 py-1.5 rounded-md bg-gray-800 text-white hover:bg-gray-700">
                                Logout
                            </button>
                        </form>
                    </div>
                </header>

                <main class="flex-1 p-6">
                    @if (session('status'))
                        <div class="mb-4 rounded-md bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-800">
                            {{ session('status') }}
                        </div>
                    @endif

                    @yield('content')
                </main>
            </div>
        </div>
    @else
        @yield('content')
    @endauth

    @stack('scripts')
</body>
</html>
