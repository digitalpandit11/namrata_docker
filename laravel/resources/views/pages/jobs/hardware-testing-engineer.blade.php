@extends('layouts.app')

@section('title', 'Hardware Testing Engineer')
@section('meta_description', 'BluBoxx Communication is hiring a Hardware Testing Engineer in Pune. Full Time. Diploma/ITI in Electronics or Instrumentation.')

@section('content')

{{-- HERO --}}
<section class="bg-gray-50 border-b border-gray-200 py-14">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/jobs') }}" class="hover:text-brand-500 transition-colors">Job Openings</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand-500">Hardware Testing Engineer</span>
        </nav>
        <p class="section-subtitle">Full Time · Pune</p>
        <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">Hardware Testing Engineer</h1>
        <p class="text-gray-500 max-w-2xl text-lg">Diagnose, replicate, and resolve network hardware issues in a lab environment while maintaining thorough technical documentation.</p>
    </div>
</section>

{{-- BRAND STRIP --}}
<div class="bg-brand-500">
    <div class="container-xl">
        <div class="grid grid-cols-3 divide-x divide-white/20 text-white text-center">
            <div class="py-5">
                <div class="text-2xl font-bold">Full Time</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Job Type</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">Pune</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Location</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">Diploma / ITI</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Education</div>
            </div>
        </div>
    </div>
</div>

{{-- JOB DETAIL + APPLY --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Left: Job Details --}}
            <div class="lg:col-span-2 space-y-10">

                {{-- Requirements --}}
                <div>
                    <h2 class="text-2xl font-bold text-dark mb-6 pb-3 border-b border-gray-100">Requirements</h2>
                    <ul class="space-y-3">
                        @foreach([
                            'Male candidate with good verbal and written communication skills',
                            'Candidate must possess a bike',
                            'Strong understanding of TCP/IP and LAN/WAN networking',
                            'Basic PLC, HMI, SCADA knowledge',
                            'Serial communication expertise (RS232 / RS485 / RS422)',
                            'Troubleshooting and remote support capabilities',
                            'Lab replication and issue resolution skills',
                            'Technical documentation abilities',
                            'Diploma or ITI in Electronics or Instrumentation',
                        ] as $req)
                        <li class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-600 leading-relaxed">{{ $req }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Responsibilities --}}
                <div>
                    <h2 class="text-2xl font-bold text-dark mb-6 pb-3 border-b border-gray-100">Responsibilities</h2>
                    <ul class="space-y-3">
                        @foreach([
                            'Collaborate with service desk and support teams to diagnose network issues',
                            'Replicate reported problems in controlled lab environments',
                            'Deploy test solutions aligned with specific requirements',
                            'Maintain detailed technical documentation',
                            'Provide remote support to customers for issue resolution',
                        ] as $resp)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            <span class="text-gray-600 leading-relaxed">{{ $resp }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            {{-- Right: Apply Form --}}
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 sticky top-24">
                    <h3 class="text-xl font-bold text-dark mb-1">Apply Now</h3>
                    <p class="text-sm text-gray-500 mb-6">Fill in your details and we'll get back to you.</p>

                    @if(session('success'))
                    <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ url('/jobs/apply') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <input type="hidden" name="position" value="Hardware Testing Engineer">

                        <div>
                            <label class="block text-sm font-medium text-dark mb-1">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" required class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-dark focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 bg-white" placeholder="Your full name">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" required class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-dark focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 bg-white" placeholder="you@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-1">Phone <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone" required class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-dark focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 bg-white" placeholder="+91 XXXXX XXXXX">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-1">Cover Letter</label>
                            <textarea name="cover_letter" rows="4" class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-dark focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 bg-white resize-none" placeholder="Tell us about yourself..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-1">CV / Resume <span class="text-red-500">*</span></label>
                            <input type="file" name="cv" accept=".pdf,.doc,.docx" required class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-500 focus:outline-none focus:border-brand-500 bg-white file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-brand-50 file:text-brand-600 hover:file:bg-brand-100">
                            <p class="text-xs text-gray-400 mt-1">PDF, DOC or DOCX accepted</p>
                        </div>

                        <div>
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')<p class="text-red-500 text-xs mt-1">Please verify that you are not a robot.</p>@enderror
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center py-3">Submit Application</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-dark text-white">
    <div class="container-xl text-center">
        <h2 class="text-3xl font-bold mb-3">Looking for Other Roles?</h2>
        <p class="text-gray-400 mb-8 max-w-lg mx-auto">Explore all open positions at BluBoxx Communication.</p>
        <a href="{{ url('/jobs') }}" class="btn-primary px-8 py-4 text-base">View All Openings</a>
    </div>
</section>

@endsection
