@extends('layouts.app')

@section('title', $type['label'] . ' Supplier in Pune & PAN India | BluBoxx Communication')
@section('meta_description', 'BluBoxx Communication supplies ' . $type['label'] . ' from Planet Technology. Authorized industrial ethernet switch dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Industrial Ethernet Switches</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/unmanaged-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">{{ $subcategory['label'] }}</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">{{ $type['label'] }}</span>
        </nav>
    </div>
</div>

{{-- Page Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="section-subtitle mb-3">Unmanaged Ethernet Switches</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-3xl mx-auto">
            {{ $type['label'] }}
        </h1>
        <p class="mt-5 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">{{ $type['description'] }}</p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

@if(empty($type['iframe_url']))
{{-- Type pills — sub-nav within unmanaged switches --}}
<div class="bg-white border-b border-gray-200">
    <div class="container-xl">
        <div class="flex items-center gap-2 py-3 overflow-x-auto scrollbar-hide">
            @foreach(config('products.unmanaged-ethernet-switches.types') as $slug => $t)
            <a href="{{ url('/unmanaged-ethernet-switches-supplier/' . $slug) }}"
               class="flex-shrink-0 px-4 py-2 rounded-xl text-sm font-semibold border-2 transition-all duration-200
                      {{ $slug === $typeSlug
                         ? 'border-brand-500 text-brand-600 bg-brand-50'
                         : 'border-gray-200 text-gray-600 bg-white hover:border-brand-300 hover:text-brand-600 hover:bg-gray-50' }}">
                {{ $t['label'] }}
            </a>
            @endforeach
        </div>
    </div>
</div>
@endif

{{-- Product Grid --}}
<div class="container-xl py-10">

    @if(empty($type['iframe_url']))

    @if(count($type['products']) > 0)

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 mb-16">
        @foreach($type['products'] as $productSlug => $product)
        @php $detailUrl = url('/unmanaged-ethernet-switches-supplier/' . $typeSlug . '/' . $productSlug); @endphp
        <a href="{{ $detailUrl }}" class="group block">

            {{-- Image --}}
            <div class="overflow-hidden rounded-2xl bg-gray-100 w-full" style="aspect-ratio:4/3">
                @php
                    $imgPath = public_path('images/products/ethernet_switches/' . $product['img']);
                @endphp
                @if(file_exists($imgPath))
                <img src="{{ asset('images/products/ethernet_switches/' . $product['img']) }}"
                     alt="{{ $product['full_name'] }}"
                     class="w-full h-full object-contain p-8 group-hover:scale-105 transition-transform duration-500 ease-out">
                @else
                <div class="w-full h-full flex items-center justify-center p-8 group-hover:bg-brand-50/50 transition-colors">
                    <svg class="w-20 h-20 text-gray-300 group-hover:text-brand-200 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
                    </svg>
                </div>
                @endif
            </div>

            {{-- Info --}}
            <div class="mt-4">
                <div class="flex items-start justify-between gap-3">
                    <div>
                        <p class="text-xs font-semibold text-brand-500 mb-0.5">{{ $product['brand'] }}</p>
                        <p class="text-base font-bold text-gray-900 group-hover:text-brand-600 transition-colors leading-snug">
                            {{ $product['name'] }}
                        </p>
                        <p class="text-xs text-gray-500 mt-0.5 leading-snug">{{ $product['full_name'] }}</p>
                    </div>
                    <span class="flex-shrink-0 flex items-center gap-1 text-sm text-gray-400 group-hover:text-brand-500 transition-colors mt-0.5">
                        View
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>

                {{-- Spec chips --}}
                <div class="flex flex-wrap gap-1.5 mt-3">
                    @foreach($product['specs'] as $label => $value)
                    <span class="inline-flex items-center gap-1 bg-gray-100 group-hover:bg-brand-50 text-gray-600 text-xs px-2.5 py-1 rounded-full transition-colors">
                        <span class="text-gray-400">{{ $label }}:</span>
                        <span class="font-semibold text-gray-700">{{ $value }}</span>
                    </span>
                    @endforeach
                </div>
            </div>
        </a>
        @endforeach
    </div>

    @else

    {{-- Empty state --}}
    <div class="flex flex-col items-center justify-center py-24 text-center">
        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
        </div>
        <h2 class="text-lg font-bold text-dark mb-2">Products Coming Soon</h2>
        <p class="text-sm text-gray-500 max-w-xs mb-6">We're adding our full catalog for {{ $type['label'] }}. Contact us for availability and pricing.</p>
        <a href="{{ url('/contact-us') }}"
           class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm px-5 py-2.5 rounded-xl transition-colors">
            Contact for Enquiry
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>

    @endif

    @endif

    {{-- Planet iframe (shown when type has iframe_url) --}}
    @if(!empty($type['iframe_url']))

    {{-- Loading skeleton --}}
    <div id="iframe-skeleton"
         class="w-full bg-gradient-to-br from-gray-100 to-gray-50 rounded-2xl mb-10"
         style="height:600px">
        <div class="h-full flex flex-col items-center justify-center gap-4 p-10 text-gray-400">
            <svg class="w-10 h-10 animate-spin text-brand-300" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
            </svg>
            <p class="text-sm font-medium text-gray-500">Loading {{ $type['label'] }} products…</p>
        </div>
    </div>

    {{-- Full-width iframe wrapper — overflow:hidden clips the external site footer --}}
    <div class="hidden relative overflow-hidden w-full mb-10" id="product-frame-wrap" style="height:2750px">
        <iframe id="product-frame"
                src="{{ $type['iframe_url'] }}"
                title="{{ $type['label'] }}"
                class="w-full"
                style="height:4000px; display:block; border:none; margin-top:-100px">
        </iframe>
        <div id="iframe-footer-overlay" class="absolute bottom-0 left-0 right-0 bg-white pointer-events-none" style="height:200px; z-index:10"></div>
    </div>

    {{-- Fallback --}}
    <div id="iframe-fallback"
         class="hidden w-full border border-gray-200 rounded-2xl bg-gray-50 mb-10"
         style="min-height:360px">
        <div class="flex flex-col items-center justify-center h-full p-10 text-center">
            <div class="w-16 h-16 rounded-2xl bg-brand-50 flex items-center justify-center mb-5">
                <svg class="w-8 h-8 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-dark mb-2">View on Planet Website</h3>
            <p class="text-sm text-gray-500 max-w-sm mb-6 leading-relaxed">
                The full product catalogue is available directly on the Planet Technology website.
            </p>
            <a href="{{ $type['iframe_url'] }}"
               target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-3 rounded-xl transition-colors shadow-sm">
                Visit Planet Technology
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>

    @push('scripts')
    <script>
    (function () {
        var frame    = document.getElementById('product-frame');
        var skeleton = document.getElementById('iframe-skeleton');
        var fallback = document.getElementById('iframe-fallback');
        var loaded   = false;
        var initialLoad = true;
        var timer;

        function showFallback() {
            if (loaded) return;
            loaded = true;
            clearTimeout(timer);
            skeleton.style.display = 'none';
            frame.style.display    = 'none';
            frame.src              = 'about:blank';
            fallback.classList.remove('hidden');
            fallback.style.display = 'block';
        }

        function showFrame() {
            if (loaded) return;
            loaded = true;
            clearTimeout(timer);
            skeleton.style.display = 'none';
            var wrap = document.getElementById('product-frame-wrap');
            wrap.classList.remove('hidden');
            wrap.style.display = 'block';
        }

        frame.addEventListener('load', showFrame);
    frame.addEventListener('error', showFallback);
    timer = setTimeout(showFallback, 30000);
    }());
    </script>
    @endpush

    @endif

    {{-- SEO Text --}}
    <div class="text-sm text-gray-600 leading-relaxed space-y-4 border-t border-gray-100 pt-8 max-w-4xl">
        <h2 class="text-lg font-bold text-dark">{{ $type['label'] }} Supplier in Pune, PAN India</h2>
        <p>
            <strong>BluBoxx Communication</strong> is an authorized supplier and dealer of industrial <strong>{{ $type['label'] }}</strong>
            from leading manufacturers including Planet Technology, 3onedata, Antaira, Kyland, and ADLINK.
            We serve industries across Pune, Mumbai, Bangalore, Hyderabad, Chennai, Delhi, Noida, and PAN India.
        </p>
        <div class="border-t border-gray-200 pt-4">
            <p class="font-semibold text-gray-800 mb-2">People Search Us for:</p>
            <div class="flex flex-wrap gap-2">
                @foreach([$type['label'] . ' Supplier', $type['label'] . ' Dealer', $type['label'] . ' Supplier in Pune', $type['label'] . ' Price', 'Industrial Gigabit Switch Pune'] as $tag)
                <span class="inline-block bg-gray-100 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
