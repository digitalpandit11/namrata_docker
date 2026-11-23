@extends('layouts.app')

@section('title', 'Fiber Optics/Network Products & Accessories Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication provides Fiber Optics & Network Products including LIU, Ethernet Patch Cord, Single Mode Patch Cord, Multi Mode FO Patch Cord, Armored FO Patch Cord, Power Supply and Rackmount LIU. Supplier & Dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Fiber Optics / Network Products &amp; Accessories</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-dark tracking-tight leading-tight mx-auto">
            Fiber Optics &amp; Network Products
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            LIU, patch cords, power supply &amp; rackmount solutions for fiber optic networks.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'fiber-optics'])

{{-- Main Content --}}
<div class="container-xl py-10">

    @php
    $imgDir = 'images/products/fiber_optics/';
    $products = [
        ['name' => 'LIU',                    'img' => 'liu.png',                     'url' => url('/fibre-optics-solutions/liu-2')],
        ['name' => 'Ethernet Patch Cord',    'img' => 'ethernet_patch_cord.webp',    'url' => '#'],
        ['name' => 'Single Mode Patch Cord', 'img' => 'single_mode_patch_cord.webp', 'url' => url('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord/patch-cord-sc-sc-duplex-5-mtrs-singlemode')],
        ['name' => 'Multi Mode FO Patch Cord','img' => 'multi_mode_patch_cord.webp', 'url' => '#'],
        ['name' => 'Armored FO Patch Cord',  'img' => 'armored_fo_patch_cord.webp',  'url' => url('/fibre-optics-solutions/fo-patch-cords')],
        ['name' => 'Power Supply',           'img' => 'power_supply.webp',           'url' => 'https://www.meanwell.com/productSeries.aspx?i=17&c=6#tag-6-17'],
        ['name' => 'Rackmount LIU',          'img' => 'rackmount_liu.webp',          'url' => '#'],
    ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 mb-16">
        @foreach($products as $product)
        <a href="{{ $product['url'] }}"
           @if($product['url'] !== '#') target="_blank" rel="noopener noreferrer" @endif
           class="group block{{ $product['url'] === '#' ? ' cursor-default pointer-events-none' : '' }}">
            <div class="overflow-hidden rounded-2xl bg-gray-100 w-full" style="aspect-ratio:4/3">
                @if(file_exists(public_path($imgDir . $product['img'])))
                <img src="{{ asset($imgDir . $product['img']) }}"
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
                    View
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </div>
        </a>
        @endforeach
    </div>

</div>

@endsection
