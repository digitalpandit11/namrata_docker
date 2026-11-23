@extends('layouts.app')

@section('title', $subcategory['label'] . ' Supplier in Pune & PAN India | BluBoxx Communication')
@section('meta_description', 'BluBoxx Communication supplies ' . $subcategory['label'] . ' from Planet, 3onedata, Antaira & more. Authorized industrial ethernet switch dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Industrial Ethernet Switches</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">{{ $subcategory['label'] }}</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-2">Industrial Ethernet Switches</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-dark leading-tight max-w-2xl">
            {{ $subcategory['label'] }}
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl leading-relaxed">{{ $subcategory['description'] }}</p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

{{-- Type cards grid --}}
<div class="container-xl py-12">

    <h2 class="text-xl font-bold text-dark mb-8">Select a Switch Type</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
        @foreach($subcategory['types'] as $typeSlug => $type)
        @php $hasProducts = !empty($type['products']); @endphp
        <a href="{{ $hasProducts ? url('/unmanaged-ethernet-switches-supplier/' . $typeSlug) : '#' }}"
           class="group relative flex flex-col rounded-2xl border-2 overflow-hidden transition-all duration-300
                  {{ $hasProducts
                     ? 'border-gray-200 hover:border-brand-400 hover:shadow-lg cursor-pointer'
                     : 'border-gray-100 opacity-60 cursor-default' }}">

            {{-- Image / icon area --}}
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 group-hover:from-brand-50 group-hover:to-brand-50/50 transition-colors p-8 flex items-center justify-center" style="min-height:160px">
                <svg class="w-16 h-16 text-gray-300 group-hover:text-brand-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
                </svg>
            </div>

            {{-- Info --}}
            <div class="p-5 flex-1 flex flex-col justify-between bg-white">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <h3 class="font-bold text-dark group-hover:text-brand-600 transition-colors leading-snug">
                            {{ $type['label'] }}
                        </h3>
                        @if($hasProducts)
                        <span class="flex-shrink-0 text-xs font-semibold text-brand-600 bg-brand-50 px-2 py-0.5 rounded-full">
                            {{ count($type['products']) }} models
                        </span>
                        @else
                        <span class="flex-shrink-0 text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">
                            Coming soon
                        </span>
                        @endif
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $type['description'] }}</p>
                </div>

                @if($hasProducts)
                <div class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-brand-500 group-hover:gap-2.5 transition-all">
                    View Products
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                @endif
            </div>
        </a>
        @endforeach
    </div>

    {{-- SEO Text --}}
    <div class="text-sm text-gray-600 leading-relaxed space-y-4 border-t border-gray-100 pt-8 max-w-4xl">
        <h2 class="text-lg font-bold text-dark">{{ $subcategory['label'] }} Supplier in Pune & PAN India</h2>
        <p>
            <strong>BluBoxx Communication</strong> is an authorized supplier and dealer of
            <strong>{{ $subcategory['label'] }}</strong> in Pune and across PAN India.
            Our portfolio includes gigabit, fast ethernet, and combo switches from top manufacturers
            including Planet Technology, 3onedata, Antaira, Kyland, and ADLINK.
        </p>
        <p>
            We serve industries in
            @foreach($subcategory['seo_cities'] as $i => $city){{ $city }}{{ $i < count($subcategory['seo_cities']) - 1 ? ', ' : '.' }}@endforeach
        </p>
        <div class="pt-4 border-t border-gray-100">
            <p class="font-semibold text-gray-800 mb-2">People search for:</p>
            <div class="flex flex-wrap gap-2">
                @foreach(['Unmanaged Ethernet Switch Supplier', 'Unmanaged Ethernet Switch Dealer Pune', 'DIN-rail Ethernet Switch', 'Industrial Gigabit Switch', 'Unmanaged Ethernet Switch Price India'] as $tag)
                <span class="inline-block bg-gray-100 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
