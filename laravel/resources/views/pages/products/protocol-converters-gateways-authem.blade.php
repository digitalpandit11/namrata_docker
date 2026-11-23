@extends('layouts.app')

@section('title', 'Authem Protocol Converters & Gateways Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication is an authorized supplier of Authem Protocol Converters and Gateways in Pune & PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/protocol-converters-gateways') }}" class="hover:text-brand-500 transition-colors">Protocol Converters / Gateways</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Authem</span>
        </nav>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'protocol-converters'])

{{-- Top bar --}}
<div class="container-xl py-4">
    <h1 class="text-lg font-bold text-dark">Authem — Protocol Converters &amp; Gateways</h1>
</div>

{{-- Contact CTA --}}
<div class="container-xl py-10">
    <div class="flex flex-col items-center justify-center text-center py-16 px-6 bg-gray-50 rounded-2xl border border-gray-100">
        <div class="w-16 h-16 rounded-2xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-8 h-8 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-dark mb-3">Authem Protocol Converters &amp; Gateways</h2>
        <p class="text-gray-500 max-w-md mb-8 leading-relaxed">
            Contact our team for the complete Authem product range, specifications, and pricing.
        </p>
        <a href="{{ url('/contact-us') }}"
           class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-3 rounded-xl transition-colors shadow-sm">
            Contact Us
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</div>

@endsection
