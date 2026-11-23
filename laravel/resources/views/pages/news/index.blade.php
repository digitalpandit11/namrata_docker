@use('Illuminate\Support\Str')
@extends('layouts.app')

@section('title', 'News & Updates')
@section('meta_description', 'Latest news, updates and insights from BluBoxx Communication.')

@section('content')

<section class="bg-gradient-to-br from-dark to-dark-light text-white py-16 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #08aeee 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    <div class="container-xl">
        <p class="section-subtitle text-brand-400 mb-3">Latest from BluBoxx</p>
        <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">News & Updates</h1>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container-xl">
        @if($posts->isEmpty())
            <p class="text-gray-500 text-center py-20">No posts found.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                <a href="{{ url('/blog/' . $post->slug) }}" class="group block rounded-xl overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300">
                    @if($post->featured_image_url)
                        <div class="overflow-hidden">
                            <img src="{{ $post->featured_image_url }}"
                                 alt="{{ $post->title }}"
                                 class="w-full h-auto group-hover:scale-105 transition-transform duration-300">
                        </div>
                    @else
                        <div class="aspect-video bg-brand-50 flex items-center justify-center">
                            <span class="text-brand-300 text-4xl">📡</span>
                        </div>
                    @endif

                    <div class="p-5">
                        <p class="text-xs text-gray-400 mb-2">
                            {{ $post->published_at?->format('d M Y') }}
                        </p>
                        <h2 class="text-lg font-semibold text-dark group-hover:text-brand-500 transition-colors leading-snug">
                            {{ html_entity_decode($post->title, ENT_QUOTES | ENT_HTML5, 'UTF-8') }}
                        </h2>
                        @if($post->excerpt)
                            <p class="text-sm text-gray-500 mt-2">{{ Str::limit(html_entity_decode($post->excerpt, ENT_QUOTES | ENT_HTML5, 'UTF-8'), 130) }}</p>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</section>

@endsection
