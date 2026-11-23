@extends('layouts.app')

@section('title', 'Thank You — BluBoxx Communication')
@section('meta_description', 'Thank you for your enquiry. BluBoxx Communication will get back to you shortly.')

@section('content')

<section class="bg-[#EFECE5] min-h-[60vh] flex items-center py-20">
    <div class="container-xl">
        <div class="max-w-2xl mx-auto text-center">

            {{-- Success Icon --}}
            <div class="w-20 h-20 rounded-full bg-brand-500 flex items-center justify-center mx-auto mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
            </div>

            <h1 class="text-4xl md:text-5xl font-extrabold text-dark mb-4">Thank You!</h1>
            <p class="text-gray-500 text-lg leading-relaxed mb-10">
                Your enquiry has been received. Our team will get back to you shortly.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/') }}"
                   class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold py-3 px-8 rounded-xl transition-colors duration-200 text-base">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Back to Home
                </a>
                <a href="{{ url('/contact-us') }}"
                   class="inline-flex items-center gap-2 border-2 border-brand-500 text-brand-500 hover:bg-brand-500 hover:text-white font-bold py-3 px-8 rounded-xl transition-colors duration-200 text-base">
                    Contact Us
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
