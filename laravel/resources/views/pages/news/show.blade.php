@use('Illuminate\Support\Str')
@extends('layouts.app')

@section('title', html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8'))
@section('meta_description', html_entity_decode(Str::limit(strip_tags($post->excerpt), 160), ENT_QUOTES | ENT_HTML5, 'UTF-8'))

@section('content')

{{-- HERO BANNER --}}
<section class="relative bg-gradient-to-br from-dark to-dark-light text-white overflow-hidden">

    {{-- dot grid --}}
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #08aeee 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="container-xl relative py-14 md:py-20 max-w-5xl">

        {{-- breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-8">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <span class="text-gray-600">/</span>
            <a href="{{ url('/blog') }}" class="hover:text-brand-500 transition-colors">Blog</a>
            <span class="text-gray-600">/</span>
            <span class="text-gray-300 truncate max-w-xs">{{ html_entity_decode(Str::limit($post->title, 40), ENT_QUOTES | ENT_HTML5, 'UTF-8') }}</span>
        </nav>

        {{-- meta row --}}
        <div class="flex flex-wrap items-center gap-3 mb-5">
            <span class="inline-flex items-center gap-1.5 bg-brand-500/20 border border-brand-500/30 text-brand-400 text-xs font-semibold px-3 py-1 rounded-full">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/></svg>
                Blog
            </span>
            @if($post->published_at)
            <span class="flex items-center gap-1.5 text-sm text-gray-400">
                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                {{ $post->published_at->format('d F Y') }}
            </span>
            @endif
            <span class="flex items-center gap-1.5 text-sm text-gray-400">
                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ max(1, (int) ceil(str_word_count(strip_tags($post->content)) / 200)) }} min read
            </span>
        </div>

        {{-- title --}}
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight max-w-4xl">
            {{ html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') }}
        </h1>


    </div>
</section>

{{-- FEATURED IMAGE --}}
@if($post->featured_image_url)
<div class="bg-gray-50 py-8">
    <div class="container-xl max-w-5xl">
        <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
            <img src="{{ $post->featured_image_url }}"
                 alt="{{ html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') }}"
                 class="w-full max-h-[480px] object-contain bg-white">
        </div>
    </div>
</div>
@endif

{{-- MAIN CONTENT + SIDEBAR --}}
<section class="py-14 bg-gray-50">
    <div class="container-xl max-w-6xl">
        <div class="flex flex-col lg:flex-row gap-10">

            {{-- Article body --}}
            <article class="flex-1 min-w-0 bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
                <div class="prose prose-lg max-w-none
                            prose-headings:font-bold prose-headings:text-dark
                            prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
                            prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                            prose-p:text-gray-700 prose-p:leading-relaxed prose-p:mb-5
                            prose-a:text-brand-500 prose-a:font-medium hover:prose-a:text-brand-700 prose-a:no-underline hover:prose-a:underline
                            prose-strong:text-dark
                            prose-ul:text-gray-700 prose-ol:text-gray-700
                            prose-li:mb-1
                            prose-img:rounded-xl prose-img:shadow-md prose-img:mx-auto
                            prose-blockquote:border-brand-500 prose-blockquote:bg-brand-50 prose-blockquote:rounded-r-xl prose-blockquote:py-1">
                    {!! $post->content !!}
                </div>

                {{-- Bottom nav --}}
                <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between flex-wrap gap-4">
                    <a href="{{ url('/blog') }}"
                       class="inline-flex items-center gap-2 text-sm font-medium text-brand-500 hover:text-brand-700 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        ← All Blogs
                    </a>

                    {{-- Share --}}
                    <div class="flex items-center gap-3">
                        <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">Share:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                           target="_blank" rel="noopener noreferrer"
                           class="w-8 h-8 rounded-full bg-gray-100 hover:bg-brand-500 flex items-center justify-center transition-colors group">
                            <svg class="w-3.5 h-3.5 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode(html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8')) }}"
                           target="_blank" rel="noopener noreferrer"
                           class="w-8 h-8 rounded-full bg-gray-100 hover:bg-brand-500 flex items-center justify-center transition-colors group">
                            <svg class="w-3.5 h-3.5 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode(html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') . ' ' . request()->url()) }}"
                           target="_blank" rel="noopener noreferrer"
                           class="w-8 h-8 rounded-full bg-gray-100 hover:bg-green-500 flex items-center justify-center transition-colors group">
                            <svg class="w-3.5 h-3.5 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </article>

            {{-- Sidebar --}}
            <aside class="lg:w-72 xl:w-80 shrink-0 space-y-6">

                {{-- Post info card --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h3 class="text-sm font-bold text-dark uppercase tracking-wider mb-4">Post Info</h3>
                    <ul class="space-y-4 text-sm">
                        @if($post->published_at)
                        <li class="flex items-start gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Published</p>
                                <p class="text-gray-700 font-medium">{{ $post->published_at->format('d M Y') }}</p>
                            </div>
                        </li>
                        @endif
                        <li class="flex items-start gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Reading Time</p>
                                <p class="text-gray-700 font-medium">{{ max(1, (int) ceil(str_word_count(strip_tags($post->content)) / 200)) }} min read</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                            </span>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Category</p>
                                <p class="text-gray-700 font-medium">Blog</p>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- CTA card --}}
                <div class="bg-gradient-to-br from-dark to-dark-light rounded-2xl p-6 text-white">
                    <div class="w-10 h-10 rounded-xl bg-brand-500/20 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Need a Solution?</h4>
                    <p class="text-gray-300 text-sm mb-5 leading-relaxed">Talk to our industrial networking experts. We'll help you find the right product.</p>
                    <a href="{{ url('/contact-us') }}"
                       class="block w-full text-center bg-brand-500 hover:bg-brand-600 text-white text-sm font-semibold py-2.5 px-4 rounded-xl transition-colors">
                        Get a Free Quote
                    </a>
                </div>

                {{-- Recent posts --}}
                @php
                    $recent = \App\Models\Post::where('id', '!=', $post->id)
                        ->orderByDesc('published_at')
                        ->limit(4)
                        ->get();
                @endphp
                @if($recent->isNotEmpty())
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h3 class="text-sm font-bold text-dark uppercase tracking-wider mb-4">Recent Posts</h3>
                    <ul class="space-y-4">
                        @foreach($recent as $r)
                        <li>
                            <a href="{{ url('/blog/' . $r->slug) }}" class="group flex gap-3">
                                @if($r->featured_image_url)
                                    <img src="{{ $r->featured_image_url }}"
                                         alt="{{ html_entity_decode($r->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') }}"
                                         class="w-16 h-14 rounded-lg object-contain bg-dark shrink-0">
                                @else
                                    <div class="w-16 h-14 rounded-lg bg-brand-50 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-brand-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                                <div class="min-w-0">
                                    <p class="text-xs text-gray-400 mb-1">{{ $r->published_at?->format('d M Y') }}</p>
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-brand-500 transition-colors leading-snug line-clamp-2">
                                        {{ html_entity_decode($r->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') }}
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

            </aside>

        </div>
    </div>
</section>

@endsection
