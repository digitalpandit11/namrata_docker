@extends('layouts.app')

@section('title', 'Profibus Tester V5 Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication is an authorized supplier of Profibus Tester V5 in Pune & PAN India. Used for testing and diagnosis of Profibus DP networks.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/profibus-profinet-products-accessories') }}" class="hover:text-brand-500 transition-colors">Profibus / Profinet Products &amp; Accessories</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Profibus Tester V5</span>
        </nav>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'profibus-profinet'])

{{-- Main Content --}}
<div class="container-xl py-10">

    <div class="flex flex-col lg:flex-row gap-10 items-start">

        {{-- Product Image --}}
        <div class="w-full lg:w-2/5 flex-shrink-0">
            <div class="rounded-2xl bg-gray-100 overflow-hidden flex items-center justify-center p-8" style="aspect-ratio:4/3">
                <img src="{{ asset('images/products/profibus_profinet/profibus_tester_v5.jpg') }}"
                     alt="Profibus Tester V5"
                     class="w-full h-full object-contain">
            </div>
        </div>

        {{-- Product Info --}}
        <div class="flex-1 space-y-5">
            <h1 class="text-3xl font-extrabold text-dark">Profibus Tester V5</h1>
            <p class="text-gray-600 leading-relaxed">
                The <strong>Profibus Tester V5</strong> is a professional diagnostic tool for Profibus DP networks. It enables fast and reliable testing of signal quality, bus termination, cable continuity, and station address detection — helping maintenance teams quickly identify and resolve network faults.
            </p>
            <ul class="space-y-2 text-sm text-gray-700">
                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-brand-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tests signal level, noise &amp; bus termination</li>
                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-brand-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Detects all connected station addresses</li>
                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-brand-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Suitable for Profibus DP / FMS networks</li>
                <li class="flex items-start gap-2"><svg class="w-4 h-4 text-brand-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Compact, handheld design for field use</li>
            </ul>
            <a href="{{ url('/contact-us') }}"
               class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-3 rounded-xl transition-colors shadow-sm">
                Get a Quote
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>

    {{-- SEO Text --}}
    <div class="text-sm text-gray-700 leading-relaxed space-y-4 max-w-4xl border-t border-gray-100 pt-8 mt-12">
        <h2 class="text-lg font-bold text-dark">Profibus Tester V5 Supplier in Pune & PAN India</h2>
        <p>
            <strong>BluBoxx Communication Pvt. Ltd.</strong> is an authorized supplier and dealer of <strong>Profibus Tester V5</strong> in Pune and across PAN India.
            We supply to Pune, Mumbai, Kolkata, Bangalore, Chennai, Hyderabad, Delhi, Noida, Thane, Indore, Jaipur, Nagpur, Nashik, Ahmedabad, Surat, Goa, Gurgaon and PAN India.
        </p>
    </div>

</div>

@endsection
