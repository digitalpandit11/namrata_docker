@extends('layouts.app')

@section('title', $subpage['name'] . ' Supplier in Pune & PAN India | BluBoxx Communication')
@section('meta_description', 'BluBoxx Communication is authorized supplier of ' . $subpage['name'] . ' in Pune & PAN India. ' . $subpage['description'])

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Industrial Ethernet Switches</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">{{ $subpage['name'] }}</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-3">Industrial Ethernet Switches</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-4xl mx-auto">
            {{ $subpage['name'] }}
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            {{ $subpage['description'] }}
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

{{-- Main Content --}}
<div class="container-xl py-10">
    <div class="flex flex-col lg:flex-row gap-10 items-start">

        {{-- LEFT: Image + info --}}
        <div class="flex-1 min-w-0">

            {{-- Product image --}}
            @php $imgPath = public_path('images/products/industrial_ethernet_switches/' . $subpage['img']); @endphp
            <div class="overflow-hidden rounded-2xl bg-gray-100 w-full max-w-lg" style="aspect-ratio:4/3">
                @if(file_exists($imgPath))
                <img src="{{ asset('images/products/industrial_ethernet_switches/' . $subpage['img']) }}"
                     alt="{{ $subpage['name'] }}"
                     class="w-full h-full object-contain p-10">
                @else
                <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
                    </svg>
                </div>
                @endif
            </div>

            {{-- SEO text block --}}
            <div class="mt-8 space-y-5 text-sm text-gray-700 leading-relaxed max-w-2xl">
                <p>
                    <strong>BluBoxx Communication Pvt. Ltd.</strong> is an authorized supplier and dealer of
                    <strong>{{ $subpage['name'] }}</strong> in Pune and across PAN India.
                    {{ $subpage['description'] }}
                </p>
                <p>
                    We supply genuine industrial networking products with full technical support to customers in
                    Pune, Mumbai, Bangalore, Hyderabad, Chennai, Delhi, Noida, Kolkata, Thane, Nashik, Nagpur,
                    Indore, Jaipur, Ahmedabad, Surat, and across PAN India.
                </p>

                @if(!empty($subpage['bbcpl_url']))
                <a href="{{ $subpage['bbcpl_url'] }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-brand-600 hover:text-brand-700 font-semibold transition-colors">
                    View full product range
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                @endif

                <div class="border-t border-gray-200 pt-4">
                    <p class="font-semibold text-gray-800 mb-2">People Search Us for:</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach([
                            $subpage['name'] . ' Supplier',
                            $subpage['name'] . ' Dealer',
                            $subpage['name'] . ' Supplier in Pune',
                            $subpage['name'] . ' Price India',
                            'Industrial Ethernet Switch Supplier Pune',
                        ] as $tag)
                        <span class="inline-block bg-gray-100 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT: Enquiry Sidebar --}}
        <div class="w-full lg:w-80 flex-shrink-0 lg:sticky lg:top-6 space-y-4">

            @if(session('enquiry_success'))
            <div class="bg-green-50 border border-green-200 rounded-2xl p-4 flex items-start gap-3">
                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <p class="text-sm text-green-700 font-medium">{{ session('enquiry_success') }}</p>
            </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <div class="bg-dark px-5 py-4">
                    <h3 class="text-white font-bold text-base leading-tight">Enquire about {{ $subpage['name'] }}</h3>
                    <p class="text-gray-400 text-xs mt-0.5">Our team responds within 24 hours</p>
                </div>
                <div class="p-5">
                    <form action="{{ url('/product-enquiry') }}" method="POST" class="space-y-3" novalidate>
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $subpage['name'] }}">
                        <input type="hidden" name="page_url"     value="{{ request()->fullUrl() }}">

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-1">Your Name <span class="text-red-400">*</span></label>
                            <input type="text" name="name" required autocomplete="name"
                                   placeholder="Full name"
                                   class="w-full text-sm border border-gray-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-1">Phone / WhatsApp <span class="text-red-400">*</span></label>
                            <input type="tel" name="phone" required autocomplete="tel"
                                   placeholder="+91 XXXXX XXXXX"
                                   class="w-full text-sm border border-gray-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-1">Email</label>
                            <input type="email" name="email" autocomplete="email"
                                   placeholder="your@company.com"
                                   class="w-full text-sm border border-gray-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition placeholder:text-gray-400">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-1">Quantity / Requirements</label>
                            <textarea name="message" rows="3"
                                      placeholder="e.g. Need 5 units, operating temp -40°C, delivery in Pune…"
                                      class="w-full text-sm border border-gray-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition placeholder:text-gray-400 resize-none"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full bg-brand-500 hover:bg-brand-600 active:bg-brand-700 text-white font-bold text-sm py-3 rounded-xl transition-colors shadow-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            Send Enquiry
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-5 space-y-3">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Or Reach Us Directly</p>

                <a href="tel:+919513164464" class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-brand-50 group-hover:bg-brand-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Call us</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-brand-600 transition-colors">+91 9513164464</p>
                    </div>
                </a>

                <a href="mailto:sales@bbcpl.in" class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-brand-50 group-hover:bg-brand-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Email us</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-brand-600 transition-colors">sales@bbcpl.in</p>
                    </div>
                </a>

                <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-green-50 group-hover:bg-green-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Chat on WhatsApp</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-green-600 transition-colors">Send a Message</p>
                    </div>
                </a>
            </div>

            <div class="bg-dark rounded-2xl p-5">
                <p class="text-sm font-bold text-white mb-4">Why Buy from BluBoxx?</p>
                <ul class="space-y-2.5">
                    @foreach([
                        'Authorized Distributor',
                        'ISO 9001-2015 Certified',
                        'Free Technical Consultation',
                        'Genuine Products Only',
                        'Pan India Delivery',
                        'Post-Sales Support',
                    ] as $point)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full bg-brand-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </span>
                        <span class="text-xs text-gray-300">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                <div class="mt-5 pt-4 border-t border-white/10">
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Serving Ford, Honeywell, Mahindra, Asian Paints, Polycab, Wipro &amp; more since 2016.
                    </p>
                </div>
            </div>

        </div>{{-- /RIGHT --}}

    </div>
</div>

@endsection
