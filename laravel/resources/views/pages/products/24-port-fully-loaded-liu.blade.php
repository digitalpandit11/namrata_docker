@extends('layouts.app')

@section('title', '24 Port Fully Loaded LIU Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication supplies 24 Port Fully Loaded LIU - SC Single Mode DIN RAIL and SC Multi Mode DIN RAIL. Lightguide Interconnect Units for housing Singlemode and Multimode Fiber Optic Connections. Supplier in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fiber-optics-network-products-accessories') }}" class="hover:text-brand-500 transition-colors">Fiber Optics / Network Products &amp; Accessories</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fibre-optics-solutions/liu-2') }}" class="hover:text-brand-500 transition-colors">LIU</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">24 Port Fully Loaded LIU</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-3">Fiber Optics / Network Products &amp; Accessories</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-4xl mx-auto">
            24 Port Fully Loaded LIU
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            Lightguide Interconnect Units for housing Singlemode and Multimode Fiber Optic Connections.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'fiber-optics'])

{{-- Main Content --}}
<div class="container-xl py-10">

    @php
    $products = [
        [
            'name'   => '24 Port Fully Loaded LIU_SC Single Mode DIN RAIL',
            'imgDir' => 'images/products/fiber_optics/liu/24_port_full/',
            'img'    => 'liuuuu-1.png',
            'url'    => url('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu/24-port-fully-loaded-liu-sc-single-mode-wall-mount'),
        ],
        [
            'name'   => '24 Port Fully Loaded LIU_SC Multi Mode DIN RAIL',
            'imgDir' => 'images/products/fiber_optics/liu/',
            'img'    => '24_port_multi.png',
            'url'    => url('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu/24-port-fully-loaded-liu_sc-multi-mode-wall-mount'),
        ],
    ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 mb-16">
        @foreach($products as $product)
        <a href="{{ $product['url'] }}" class="group block">
            <div class="overflow-hidden rounded-2xl bg-gray-100 w-full" style="aspect-ratio:4/3">
                @if(file_exists(public_path($product['imgDir'] . $product['img'])))
                <img src="{{ asset($product['imgDir'] . $product['img']) }}"
                     alt="{{ $product['name'] }}"
                     class="w-full h-full object-contain p-8 group-hover:scale-105 transition-transform duration-500 ease-out">
                @else
                <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/></svg>
                </div>
                @endif
            </div>
            <div class="mt-4 flex items-center justify-between gap-4">
                <p class="text-base font-semibold text-gray-900 group-hover:text-brand-600 transition-colors leading-snug">{{ $product['name'] }}</p>
                <span class="flex-shrink-0 flex items-center gap-1 text-sm text-gray-400 group-hover:text-brand-500 transition-colors">
                    View Products
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </div>
        </a>
        @endforeach
    </div>

    {{-- SEO Text --}}
    <div class="text-sm text-gray-700 leading-relaxed space-y-4 max-w-4xl border-t border-gray-100 pt-8">
        <p>
            <strong>We are the Authorised Supplier of <strong>24 Port Fully Loaded LIU.</strong></strong>
        </p>
        <p>
            If you have any requirement of 24 Port Fully Loaded LIU SC Single Mode DIN RAIL or 24 Port Fully Loaded LIU SC Multi Mode DIN RAIL, enquire now &amp; get instant quote.
        </p>
        <p>
            We supply 24 Port Fully Loaded LIU in Pune, Mumbai, Kolkata, Bangalore, Chennai, Hyderabad, Delhi, Noida, Thane, Indore, Jaipur, Nagpur, Mangalore, Nashik, Coimbatore, Bhopal, Baroda, Surat, Ahmedabad, GOA, Gurgaon, PAN India.
        </p>
    </div>

</div>

@endsection
