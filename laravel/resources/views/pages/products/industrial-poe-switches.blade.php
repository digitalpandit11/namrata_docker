@extends('layouts.app')

@section('title', 'Industrial Power Over Ethernet (PoE) Switches Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication provides Industrial PoE Switches from Planet, 3Onedata and Antaira. Authorized Supplier & Dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Industrial Ethernet Switches</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Industrial Power Over Ethernet Switches</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-3">Industrial Ethernet Switches</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-4xl mx-auto">
            Industrial Power Over<br>Ethernet (PoE) Switches
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            Power &amp; data over a single cable — Planet, <a href="{{ url('/industrial-power-over-ethernet-switch-3onedata') }}" class="text-brand-500 hover:underline">3Onedata</a> &amp; Antaira PoE switches for industrial automation.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

{{-- Main Content --}}
<div class="container-xl py-10">

    @php
    $imgDir = 'images/products/industrial_ethernet_switches/industrial-power-over-ethernet/';
    $brands = [
        [
            'name'     => 'Planet',
            'img'      => 'planet.webp',
            'url'      => url('/industrial-power-over-ethernet-planet'),
            'external' => false,
            'action'   => 'View Products',
        ],
        [
            'name'     => '3Onedata',
            'img'      => '3onedata.webp',
            'url'      => url('/industrial-power-over-ethernet-switch-3onedata'),
            'external' => false,
            'action'   => 'View Products',
        ],
        [
            'name'     => 'Antaira',
            'img'      => 'antaira.webp',
            'url'      => url('/industrial-poe-switches-supplier-antaira'),
            'external' => false,
            'action'   => 'View Products',
        ],
    ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 mb-16">
        @foreach($brands as $brand)
        <a href="{{ $brand['url'] }}"
           @if($brand['external']) target="_blank" rel="noopener noreferrer" @endif
           class="group block">
            <div class="overflow-hidden rounded-2xl bg-gray-100 w-full" style="aspect-ratio:4/3">
                @if(file_exists(public_path($imgDir . $brand['img'])))
                <img src="{{ asset($imgDir . $brand['img']) }}"
                     alt="{{ $brand['name'] }} Industrial PoE Switch"
                     class="w-full h-full object-contain p-8 group-hover:scale-105 transition-transform duration-500 ease-out">
                @else
                <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/></svg>
                </div>
                @endif
            </div>
            <div class="mt-4 flex items-center justify-between gap-4">
                <p class="text-base font-semibold text-gray-900 group-hover:text-brand-600 transition-colors leading-snug">{{ $brand['name'] }}</p>
                <span class="flex-shrink-0 flex items-center gap-1 text-sm text-gray-400 group-hover:text-brand-500 transition-colors">
                    {{ $brand['action'] }}
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </div>
        </a>
        @endforeach
    </div>

    {{-- SEO Text --}}
    <div class="text-sm text-gray-700 leading-relaxed space-y-4 max-w-4xl border-t border-gray-100 pt-8">
        <h2 class="text-lg font-bold text-dark">Industrial PoE Switch Supplier in Pune & PAN India</h2>
        <p>
            <strong>BluBoxx Communication Pvt. Ltd.</strong> is an authorized supplier and dealer of
            <strong>Industrial Power Over Ethernet (PoE) Switches</strong> from Planet, <a href="{{ url('/industrial-power-over-ethernet-switch-3onedata') }}" class="text-brand-500 hover:underline">3Onedata</a>, and Antaira in Pune and across PAN India.
            Our PoE switches deliver both power and data over a single Ethernet cable, simplifying installation of IP cameras, wireless access points, VoIP phones, and other PoE-enabled industrial devices.
        </p>
        <p>
            We supply to Pune, Mumbai, Kolkata, Bangalore, Chennai, Hyderabad, Delhi, Noida, Thane, Indore, Jaipur, Nagpur, Nashik, Ahmedabad, Surat, Goa, Gurgaon and PAN India.
        </p>
        <div class="pt-4 border-t border-gray-100">
            <p class="font-semibold text-gray-800 mb-2">People Search Us for:</p>
            <div class="flex flex-wrap gap-2">
                @foreach([
                    'Industrial PoE Switch Supplier',
                    'Industrial PoE Switch Dealer Pune',
                    'Power Over Ethernet Switch India',
                    'Planet PoE Switch Dealer',
                    'Antaira PoE Switch Supplier',
                    '3Onedata PoE Switch India',
                    'Industrial PoE Switch Pune',
                ] as $tag)
                <span class="inline-block bg-gray-100 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
