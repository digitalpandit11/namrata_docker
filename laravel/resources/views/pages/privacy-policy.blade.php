@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_description', 'BluBoxx Communication Pvt. Ltd. is committed to preserving your privacy. Read our privacy policy to understand how we collect, use, and protect your information.')

@section('content')

{{-- HERO --}}
<section class="bg-gray-50 border-b border-gray-200 py-14">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand-500">Privacy Policy</span>
        </nav>
        <p class="section-subtitle">Legal · Data Protection</p>
        <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">Privacy Policy</h1>
        <p class="text-gray-500 max-w-2xl text-lg">BluBoxx Communication Pvt. Ltd. is committed to preserving your privacy and protecting your personal data.</p>
    </div>
</section>

{{-- BRAND STRIP --}}
<div class="bg-brand-500">
    <div class="container-xl">
        <div class="grid grid-cols-3 divide-x divide-white/20 text-white text-center">
            <div class="py-5">
                <div class="text-2xl font-bold">100%</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Data Confidential</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">0</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Third Party Sharing</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">ISO</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">9001-2015 Certified</div>
            </div>
        </div>
    </div>
</div>

{{-- FULL TEXT --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            {{-- Left --}}
            <div>
                <p class="section-subtitle">Full Statement</p>
                <h2 class="section-title">Privacy Policy</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>When you visit the BLUBOXX website, BluBoxx Communication Pvt. Ltd. is committed to preserving your privacy.</p>
                    <p>We assure a high priority Security on protecting your privacy when handling personal data. When you visit our website, our web servers automatically record your IP address, the website from your login IP, the web pages you visited while visiting us, as well as the time and date of your visit. There is no personalized access of this data to any individual associated or non associated to the company without Authority or neither any personalized use of the same.</p>
                    <p>If you provide us information via the contact form/Message/Calls/Chats. etc or any other Form, It will be saved as part of data Acknowledgement. Your information will only be used to fulfill your Professional Requirements of products and services by authorized Associate of the company. Your information will be handled with the utmost discretion and security. It will not be passed on to any third parties.</p>
                    <p>All items found on the BLUBOXX website, including Products, Solutions, Support, and more, are covered by this privacy policy. Online and offline submissions of personal information are strictly kept confidentially.</p>
                </div>
            </div>

            {{-- Right: key commitments --}}
            <div class="space-y-4">
                @foreach([
                    ['title' => 'No Unauthorized Access',   'desc' => 'Server logs are never accessed by any individual without proper authority.'],
                    ['title' => 'Professional Use Only',     'desc' => 'Your contact details are used solely to fulfill your product and service requirements.'],
                    ['title' => 'No Third-Party Sharing',   'desc' => 'We do not sell, trade, or pass your personal information to outside parties.'],
                    ['title' => 'Online & Offline Coverage', 'desc' => 'This policy applies to all personal information submitted through any channel.'],
                ] as $point)
                <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl hover:bg-brand-50 transition-colors group">
                    <div class="w-8 h-8 rounded-full bg-brand-500 flex items-center justify-center shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-dark mb-1 group-hover:text-brand-600 transition-colors">{{ $point['title'] }}</h4>
                        <p class="text-sm text-gray-500">{{ $point['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-dark text-white">
    <div class="container-xl text-center">
        <h2 class="text-3xl font-bold mb-3">Have Questions About Your Data?</h2>
        <p class="text-gray-400 mb-8 max-w-lg mx-auto">Get in touch with our team — we're happy to address any privacy concerns.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact-us') }}" class="btn-primary px-8 py-4 text-base">Contact Us</a>
            <a href="mailto:sales@bbcpl.in" class="btn-outline border-white text-white hover:bg-white hover:text-dark px-8 py-4 text-base">sales@bbcpl.in</a>
        </div>
    </div>
</section>

@endsection
