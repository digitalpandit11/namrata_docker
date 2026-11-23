@extends('layouts.app')

@section('title', 'Etic Telecom IoT Routers & Gateways Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication is authorized supplier of Etic Telecom Industrial IoT Routers and Gateways in Pune & PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/iot-gateways') }}" class="hover:text-brand-500 transition-colors">Industrial IoT Gateways</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Etic Telecom</span>
        </nav>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'iot-gateways-routers'])

{{-- Top bar: label + open-in-new-tab link --}}
<div class="container-xl py-4">
    <div class="flex items-center justify-between gap-4">
        <h1 class="text-lg font-bold text-dark">Etic Telecom — Industrial IoT Routers &amp; Gateways</h1>
    </div>
</div>

{{-- Loading skeleton --}}
<div id="iframe-skeleton"
     class="w-full bg-gradient-to-br from-gray-100 to-gray-50"
     style="height:600px">
    <div class="h-full flex flex-col items-center justify-center gap-4 p-10 text-gray-400">
        <svg class="w-10 h-10 animate-spin text-brand-300" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
        </svg>
        <p class="text-sm font-medium text-gray-500">Loading Etic Telecom products…</p>
    </div>
</div>

<style>
  #product-frame-wrap    { height: 5620px; }
  #iframe-footer-overlay { height: 150px; }
  @media (max-width: 1024px) {
    #product-frame-wrap    { height: 5175px !important; }
    #iframe-footer-overlay { height: 150px !important; }
  }
</style>
{{-- Full-width iframe wrapper — overflow:hidden clips the external site footer --}}
<div class="hidden relative overflow-hidden w-full" id="product-frame-wrap">
    <iframe id="product-frame"
            src="https://www.etictelecom.com/en/nos-gammes/industrial-router-ipl-family/"
            title="Etic Telecom Industrial IoT Routers & Gateways"
            class="w-full"
            style="height:6000px; display:block; border:none; margin-top:-100px">
    </iframe>
    {{-- Covers the external site's footer --}}
    <div id="iframe-footer-overlay" class="absolute bottom-0 left-0 right-0 bg-white pointer-events-none" style="z-index:10"></div>
</div>

{{-- Fallback — shown if iframe is blocked by X-Frame-Options --}}
<div id="iframe-fallback"
     class="hidden w-full border-t border-gray-200 bg-gray-50"
     style="min-height:360px">
    <div class="flex flex-col items-center justify-center h-full p-10 text-center">
        <div class="w-16 h-16 rounded-2xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-8 h-8 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
            </svg>
        </div>
        <h3 class="text-lg font-bold text-dark mb-2">View on Etic Telecom Website</h3>
        <p class="text-sm text-gray-500 max-w-sm mb-6 leading-relaxed">
            The full product catalogue is available directly on the Etic Telecom website.
        </p>
        <a href="https://www.etictelecom.com/en/nos-gammes/industrial-router-ipl-family/"
           target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-3 rounded-xl transition-colors shadow-sm">
            Visit Etic Telecom
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
        </a>
    </div>
</div>

@push('scripts')
<script>
(function () {
    var ORIGINAL_SRC = 'https://www.etictelecom.com/en/nos-gammes/industrial-router-ipl-family/';
    var frame    = document.getElementById('product-frame');
    var skeleton = document.getElementById('iframe-skeleton');
    var loaded   = false;
    var timer;

    function showFallback() {
        if (loaded) return;
        loaded = true;
        clearTimeout(timer);
        skeleton.style.display = 'none';
        frame.style.display    = 'none';
        frame.src              = 'about:blank';
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

@endsection
