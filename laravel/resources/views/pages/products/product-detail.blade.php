@extends('layouts.app')

@section('title', $product['name'] . ' — ' . $product['full_name'] . ' Supplier | BluBoxx')
@section('meta_description', 'BluBoxx Communication is authorized supplier of ' . $product['name'] . ' — ' . $product['full_name'] . '. Best price, genuine product, technical support. Dealer in Pune & PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Ethernet Switches</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/unmanaged-ethernet-switches-supplier') }}" class="hover:text-brand-500 transition-colors">Unmanaged</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/unmanaged-ethernet-switches-supplier/' . $typeSlug) }}" class="hover:text-brand-500 transition-colors">{{ $type['label'] }}</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-semibold">{{ $product['name'] }}</span>
        </nav>
    </div>
</div>

{{-- Product Header --}}
<div class="bg-white border-b border-gray-100 py-6">
    <div class="container-xl">
        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-5">

            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-2 mb-2 flex-wrap">
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-brand-500 text-white">
                        {{ $product['brand'] }}
                    </span>
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-50 text-green-700 border border-green-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                        Available — Enquire for Price
                    </span>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-dark leading-tight">
                    {{ $product['name'] }}
                </h1>
                <p class="text-gray-500 mt-1 leading-snug">{{ $product['full_name'] }}</p>
            </div>

            {{-- Tags --}}
            <div class="flex flex-wrap gap-2 sm:justify-end sm:max-w-xs">
                @foreach($product['tags'] as $tag)
                <span class="inline-block bg-gray-100 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>
        </div>

        {{-- Spec chips strip --}}
        <div class="flex flex-wrap gap-2 mt-4">
            @foreach($product['specs'] as $label => $value)
            <div class="flex items-center gap-1.5 bg-dark/5 rounded-lg px-3 py-1.5 text-xs">
                <span class="text-gray-500">{{ $label }}:</span>
                <span class="font-bold text-dark">{{ $value }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

{{-- Main two-column layout --}}
<div class="container-xl py-8">
    <div class="flex flex-col lg:flex-row gap-8 items-start">

        {{-- ── LEFT: Iframe area ─────────────────────────────────────────────── --}}
        <div class="flex-1 min-w-0">

            {{-- Section heading + external link --}}
            <div class="flex items-center justify-between gap-4 mb-4">
                <h2 class="text-base font-bold text-dark">Product Details & Specifications</h2>
                <a href="{{ $product['iframe_url'] }}" target="_blank" rel="noopener noreferrer"
                   class="flex-shrink-0 flex items-center gap-1.5 text-xs text-brand-600 hover:text-brand-700 font-medium transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Open on manufacturer site
                </a>
            </div>

            {{-- Loading skeleton --}}
            <div id="iframe-skeleton"
                 class="w-full rounded-2xl overflow-hidden bg-gradient-to-br from-gray-100 to-gray-50"
                 style="min-height:720px">
                <div class="h-full flex flex-col items-center justify-center gap-4 p-10 text-gray-400">
                    <svg class="w-10 h-10 animate-spin text-brand-300" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                    </svg>
                    <p class="text-sm font-medium text-gray-500">Loading specifications from manufacturer…</p>
                </div>
            </div>

            {{-- The iframe --}}
            <iframe id="product-frame"
                    src="{{ $product['iframe_url'] }}"
                    title="{{ $product['full_name'] }} Specifications"
                    class="hidden w-full rounded-2xl border border-gray-200 shadow-sm"
                    style="min-height:720px">
            </iframe>

            {{-- Fallback card — shown if iframe is blocked --}}
            <div id="iframe-fallback"
                 class="hidden w-full rounded-2xl border-2 border-dashed border-gray-200 bg-gray-50"
                 style="min-height:340px">
                <div class="flex flex-col items-center justify-center h-full p-10 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-brand-50 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">Full Specifications Available</h3>
                    <p class="text-sm text-gray-500 max-w-sm mb-6 leading-relaxed">
                        View the complete datasheet, technical specs, ordering info, and downloads on the manufacturer's official website.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="{{ $product['iframe_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-3 rounded-xl transition-colors shadow-sm">
                            View Full Specifications
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        <a href="{{ url('/unmanaged-ethernet-switches-supplier/' . $typeSlug) }}"
                           class="text-sm text-gray-500 hover:text-brand-600 transition-colors">
                            ← Back to {{ $type['label'] }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- SEO content --}}
            <div class="mt-10 pt-8 border-t border-gray-100 text-sm text-gray-600 leading-relaxed space-y-4 max-w-3xl">
                <h2 class="text-lg font-bold text-dark">
                    {{ $product['name'] }} Supplier &amp; Dealer in Pune, PAN India
                </h2>
                <p>
                    <strong>BluBoxx Communication Pvt. Ltd.</strong> is an authorized supplier and dealer of the
                    <strong>{{ $product['brand'] }} {{ $product['name'] }}</strong> —
                    {{ $product['full_name'] }}.
                    We supply genuine industrial networking products with full technical support to customers in Pune,
                    Mumbai, Bangalore, Hyderabad, Chennai, Delhi, Noida, Kolkata, and across PAN India.
                </p>
                <p>
                    The {{ $product['name'] }} is built for harsh industrial environments and delivers reliable,
                    unmanaged plug-and-play ethernet connectivity in factory automation, building automation,
                    intelligent transportation, and power &amp; energy sectors.
                </p>
                <p>
                    Contact BluBoxx for competitive pricing, lead times, and post-sales technical support.
                    We are ISO 9001-2015 certified and have been serving the industry since 2016.
                </p>

                <div class="pt-4 border-t border-gray-100">
                    <p class="font-semibold text-gray-800 mb-2">People search for:</p>
                    <div class="flex flex-wrap gap-2">
                        @php
                            $seoTags = [
                                $product['name'] . ' Supplier',
                                $product['name'] . ' Dealer',
                                $product['name'] . ' Price',
                                $product['name'] . ' Supplier in Pune',
                                $product['name'] . ' Datasheet',
                                $product['brand'] . ' Industrial Switch Supplier',
                                $product['brand'] . ' Authorized Dealer India',
                            ];
                        @endphp
                        @foreach($seoTags as $tag)
                        <span class="inline-block bg-gray-100 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>{{-- /LEFT --}}

        {{-- ── RIGHT: Enquiry Sidebar ──────────────────────────────────────── --}}
        <div class="w-full lg:w-80 flex-shrink-0 lg:sticky lg:top-6 space-y-4">

            {{-- Success flash --}}
            @if(session('enquiry_success'))
            <div class="bg-green-50 border border-green-200 rounded-2xl p-4 flex items-start gap-3">
                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <p class="text-sm text-green-700 font-medium">{{ session('enquiry_success') }}</p>
            </div>
            @endif

            {{-- Enquiry form card --}}
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                {{-- Card header --}}
                <div class="bg-dark px-5 py-4">
                    <h3 class="text-white font-bold text-base leading-tight">Get a Quote for {{ $product['name'] }}</h3>
                    <p class="text-gray-400 text-xs mt-0.5">Our team responds within 24 hours</p>
                </div>

                {{-- Form --}}
                <div class="p-5">
                    <form action="{{ url('/product-enquiry') }}" method="POST" class="space-y-3" novalidate>
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                        <input type="hidden" name="product_full" value="{{ $product['full_name'] }}">
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

            {{-- Direct contact --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 space-y-3">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Or Reach Us Directly</p>

                <a href="tel:+919513164464"
                   class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-brand-50 group-hover:bg-brand-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Call us</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-brand-600 transition-colors">+91 9513164464</p>
                    </div>
                </a>

                <a href="mailto:sales@bbcpl.in"
                   class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-brand-50 group-hover:bg-brand-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Email us</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-brand-600 transition-colors">sales@bbcpl.in</p>
                    </div>
                </a>

                <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer"
                   class="flex items-center gap-3 py-1 group">
                    <span class="w-9 h-9 rounded-xl bg-green-50 group-hover:bg-green-100 flex items-center justify-center flex-shrink-0 transition-colors">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400">Chat on WhatsApp</p>
                        <p class="text-sm font-semibold text-gray-800 group-hover:text-green-600 transition-colors">Send a Message</p>
                    </div>
                </a>
            </div>

            {{-- Why BluBoxx trust card --}}
            <div class="bg-dark rounded-2xl p-5">
                <p class="text-sm font-bold text-white mb-4">Why Buy from BluBoxx?</p>
                <ul class="space-y-2.5">
                    @foreach([
                        ['icon' => '✓', 'text' => 'Authorized Distributor'],
                        ['icon' => '✓', 'text' => 'ISO 9001-2015 Certified'],
                        ['icon' => '✓', 'text' => 'Free Technical Consultation'],
                        ['icon' => '✓', 'text' => 'Genuine Products Only'],
                        ['icon' => '✓', 'text' => 'Pan India Delivery'],
                        ['icon' => '✓', 'text' => 'Post-Sales Support'],
                    ] as $point)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full bg-brand-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-brand-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </span>
                        <span class="text-xs text-gray-300">{{ $point['text'] }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="mt-5 pt-4 border-t border-white/10">
                    <p class="text-xs text-gray-400 leading-relaxed">
                        Serving Ford, Honeywell, Mahindra, Asian Paints, Polycab, Wipro &amp; more since 2016.
                    </p>
                </div>
            </div>

            {{-- Other products in this type --}}
            @php
                $otherProducts = collect($type['products'])->except($productSlug);
            @endphp
            @if($otherProducts->isNotEmpty())
            <div class="bg-white border border-gray-200 rounded-2xl p-5">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Other Models</p>
                <div class="space-y-2">
                    @foreach($otherProducts as $slug => $other)
                    <a href="{{ url('/unmanaged-ethernet-switches-supplier/' . $typeSlug . '/' . $slug) }}"
                       class="flex items-center justify-between gap-3 p-3 rounded-xl border border-gray-100 hover:border-brand-200 hover:bg-brand-50/50 transition-all group">
                        <div>
                            <p class="text-sm font-semibold text-dark group-hover:text-brand-600 transition-colors">{{ $other['name'] }}</p>
                            <p class="text-xs text-gray-400 leading-snug mt-0.5">{{ implode(' · ', array_values(array_slice($other['specs'], 0, 2))) }}</p>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-brand-400 group-hover:translate-x-0.5 transition-all flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

        </div>{{-- /RIGHT --}}

    </div>
</div>

@push('scripts')
<script>
(function () {
    var frame    = document.getElementById('product-frame');
    var skeleton = document.getElementById('iframe-skeleton');
    var fallback = document.getElementById('iframe-fallback');
    var loaded   = false;
    var timer;

    function showFallback() {
        if (loaded) return;
        loaded = true;
        clearTimeout(timer);
        if (skeleton) { skeleton.style.display = 'none'; }
        if (frame)    { frame.style.display = 'none'; frame.src = 'about:blank'; }
        if (fallback) { fallback.style.display = 'block'; }
    }

    function showFrame() {
        if (loaded) return;
        loaded = true;
        clearTimeout(timer);
        if (skeleton) { skeleton.style.display = 'none'; }
        if (frame)    { frame.style.display = 'block'; }
    }

    frame.addEventListener('load', showFrame);
    frame.addEventListener('error', showFallback);
    timer = setTimeout(showFallback, 30000);
}());
</script>
@endpush

@endsection
