@extends('layouts.app')

@section('title', 'Profibus/Profinet Products & Accessories Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication provides Profibus & Profinet Products including Profibus Cable, Connector, Tester, Stripping Tools, Profinet Cable, Connector, Tester, Stripping Tools and Patch Cord. Supplier & Dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Profibus / Profinet Products &amp; Accessories</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-dark tracking-tight leading-tight mx-auto">
            Profibus / Profinet Products &amp; Accessories
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            Cables, connectors, testers, stripping tools &amp; patch cords for Profibus &amp; Profinet networks.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'profibus-profinet'])

{{-- Main Content --}}
<div class="container-xl py-10">

    @php
    $imgDir = 'images/products/profibus_profinet/';
    $products = [
        ['name' => 'Profibus Tester V5',       'img' => 'profibus_tester_v5.jpg',       'url' => url('/profibus-3/profibus-tester-v5')],
        ['name' => 'Profibus Cable',            'img' => 'profibus_cable.png',           'url' => url('/profibus-3/profibus-cable/profibus-dp-cable')],
        ['name' => 'Profibus Connector',        'img' => 'profibus_connector.png',       'url' => url('/profibus-3/profibus-connector')],
        ['name' => 'Profinet Connector',        'img' => 'profinet_connector.webp',      'url' => url('/softlink-profinet-male-connector')],
        ['name' => 'Profibus Stripping Tools',  'img' => 'profibus_stripping_tools.webp','url' => url('/profibus-profinet-stripping-tools')],
        ['name' => 'Profinet Cable',            'img' => 'profinet_cable.webp',          'url' => url('/profinet-cable')],
        ['name' => 'Profinet Tester',           'img' => 'profinet_tester.webp',         'url' => url('/profinet-tester')],
        ['name' => 'Profinet Stripping Tools',  'img' => 'profinet_stripping_tools.webp','url' => url('/profibus-profinet-stripping-tools')],
        ['name' => 'Profinet Patch Cord',       'img' => 'profinet_patch_cord.webp',     'url' => url('/profinet-patch-cord')],
    ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 mb-16">
        @foreach($products as $product)
        <a href="{{ $product['url'] }}" class="group block">
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

    {{-- SEO text --}}
    <div class="text-sm text-gray-700 leading-relaxed space-y-2 max-w-4xl">
        <p>We are the Authorised Supplier of Profibus Cables. If you have any requirement of <strong>Profibus DP Cable</strong>, please fill up the enquiry form &amp; we will get back to you.</p>
        <p>We supply Profibus DP Cable in Pune, Mumbai, Kolkata, Bangalore, Chennai, Hyderabad, Delhi, Noida, Thane, Indore, Jaipur, Nagpur, Mangalore, Nashik, Coimbatore, Bhopal, Baroda, Surat, Ahmedabad, GOA, Gurgaon, PAN India.</p>
    </div>

</div>

@endsection
