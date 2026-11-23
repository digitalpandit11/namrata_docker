@extends('layouts.app')

@section('title', 'Job Openings')
@section('meta_description', 'Join the BluBoxx Communication team. Explore open positions in Sales, Technical Support, Hardware Testing, and more. Based in Pune, Maharashtra.')

@section('content')

{{-- HERO --}}
<section class="bg-gray-50 border-b border-gray-200 py-14">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand-500">Job Openings</span>
        </nav>
        <p class="section-subtitle">We're Hiring</p>
        <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">Job Openings</h1>
        <p class="text-gray-500 max-w-2xl text-lg">Join our growing team and help connect industries with the latest networking solutions.</p>
    </div>
</section>

{{-- BRAND STRIP --}}
<div class="bg-brand-500">
    <div class="container-xl">
        <div class="grid grid-cols-3 divide-x divide-white/20 text-white text-center">
            <div class="py-5">
                <div class="text-2xl font-bold">4</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Open Positions</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">Full Time</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Job Type</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">Pune</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Location</div>
            </div>
        </div>
    </div>
</div>

{{-- JOB LISTINGS --}}
<section class="py-20 bg-gray-50">
    <div class="container-xl">

        <div class="text-center mb-14">
            <p class="section-subtitle">Current Openings</p>
            <h2 class="section-title">Available Positions</h2>
            <p class="text-gray-500 max-w-xl mx-auto">We're looking for passionate individuals to grow with us. All positions are based in Pune, Maharashtra.</p>
        </div>

        @php
        $jobs = [
            [
                'title'   => 'Regional Sales Engineer',
                'slug'    => 'regional-sales-engineer',
                'type'    => 'Full Time',
                'location'=> 'Pune',
                'edu'     => 'Diploma / BE / MSc / BSc',
                'field'   => 'Electronics, Instrumentation or Electrical',
                'desc'    => 'Drive sales by visiting clients, generating purchase requirements, sending quotations, and following up with customers across the region.',
                'icon'    => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
            ],
            [
                'title'   => 'Hardware Testing Engineer',
                'slug'    => 'hardware-testing-engineer',
                'type'    => 'Full Time',
                'location'=> 'Pune',
                'edu'     => 'Diploma / ITI',
                'field'   => 'Electronics or Instrumentation',
                'desc'    => 'Diagnose and replicate network issues in lab environments, collaborate with support teams, and maintain detailed technical documentation.',
                'icon'    => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
            ],
            [
                'title'   => 'Technical Support Engineer',
                'slug'    => 'technical-support-engineer',
                'type'    => 'Full Time',
                'location'=> 'Pune',
                'edu'     => 'Diploma / BE / MSc / BSc',
                'field'   => 'Electronics or Instrumentation',
                'desc'    => 'Provide technical support to customers across geographies using remote access and log analysis to resolve networking and industrial automation issues.',
                'icon'    => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
            ],
            [
                'title'   => 'Proposal Engineer',
                'slug'    => 'proposal-engineer',
                'type'    => 'Full Time',
                'location'=> 'Pune',
                'edu'     => 'Diploma / BE / MSc / BSc',
                'field'   => 'Electronics, Instrumentation or Electrical',
                'desc'    => 'Understand client technical requirements, prepare and submit proposals, manage tender submissions, and maintain MIS reports. No field visits required.',
                'icon'    => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($jobs as $job)
            <div class="bg-white rounded-xl border border-gray-100 hover:border-brand-200 hover:shadow-lg transition-all duration-300 group flex flex-col p-6">

                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 rounded-lg bg-brand-50 group-hover:bg-brand-500 flex items-center justify-center shrink-0 transition-colors">
                        <svg class="w-6 h-6 text-brand-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $job['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-dark text-lg leading-snug group-hover:text-brand-600 transition-colors">{{ $job['title'] }}</h3>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 text-xs font-medium bg-brand-50 text-brand-600 px-2.5 py-1 rounded-full">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                {{ $job['location'] }}
                            </span>
                            <span class="inline-flex items-center gap-1 text-xs font-medium bg-green-50 text-green-600 px-2.5 py-1 rounded-full">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $job['type'] }}
                            </span>
                        </div>
                    </div>
                </div>

                <p class="text-sm text-gray-500 leading-relaxed mb-4 flex-1">{{ $job['desc'] }}</p>

                <div class="flex items-center gap-2 text-xs text-gray-400 mb-5">
                    <svg class="w-4 h-4 text-brand-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                    {{ $job['edu'] }} · {{ $job['field'] }}
                </div>

                <a href="{{ url('/jobs/' . $job['slug']) }}"
                   class="inline-flex items-center gap-2 text-sm font-semibold text-brand-500 hover:text-brand-700 transition-colors mt-auto">
                    More Details
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>

            </div>
            @endforeach
        </div>

    </div>
</section>


@endsection
