@extends('layouts.app')


@section('title', 'Industrial Networking Solutions')
@section('meta_description', 'BluBoxx Communication — Authorized distributor of Planet, 3onedata, Antaira, Kyland & ADLINK. Industrial Ethernet, Fiber Optics, IoT Gateways. ISO 9001-2015 Certified.')

@section('content')

{{-- ============================================================
     HERO — Awura style: centered text top, full-width banner below
     ============================================================ --}}
<section class="relative overflow-hidden pt-10 sm:pt-16 pb-0">

    {{-- Background GIF --}}
    <img src="{{ asset('images/network-bg.gif') }}"
         alt=""
         aria-hidden="true"
         class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none select-none">

    {{-- Subtle dark overlay for depth --}}
    <div class="absolute inset-0 bg-[#0a1628]/40"></div>

    {{-- Centered text block --}}
    <div class="container-xl relative z-10">
        <div class="text-center max-w-3xl mx-auto pb-8 sm:pb-12">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/30 text-white text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 sm:mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-400"></span>
                ISO 9001-2015 Certified · Since 2016
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[3.4rem] font-bold text-white leading-tight mb-4 sm:mb-5">
                Connecting Industry with <span class="text-brand-400">Smart Networking</span>
            </h1>
            <p class="text-white text-base sm:text-lg leading-relaxed mb-6 sm:mb-8 max-w-xl mx-auto [text-shadow:0_1px_10px_rgba(0,0,0,0.9)]">
                India's Leading Industrial Networking &amp; Data Communication Solution Provider
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ url('/industrial-ethernet-switches-supplier') }}"
                   class="inline-flex items-center gap-2 border-2 border-white/60 hover:border-brand-400 text-white hover:text-brand-400 font-semibold px-6 py-3 rounded-full transition-colors duration-200">
                    Explore Products
                </a>
            </div>

        </div>
    </div>

</section>

@include('partials.products-horizontal-nav', ['activeNav' => ''])

<section class="bg-[#EFECE5] pb-0">
    {{-- Full-width banner slider — no container, spans viewport edge to edge --}}
    <div id="heroSlider" class="relative overflow-hidden" style="height: clamp(180px, 40vw, 500px);">
        @php $banners = ['banner-1.webp','banner-2.webp','web-banner-3.webp','web-banner-4.webp']; @endphp

        @foreach($banners as $i => $banner)
        <div class="hero-slide absolute inset-0 transition-opacity duration-700 {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}">
            <img src="{{ asset('images/banner/' . $banner) }}"
                 alt="BluBoxx Banner {{ $i + 1 }}"
                 class="w-full h-full object-cover {{ $i === 0 ? 'object-center' : 'object-left md:object-center' }}"
                 {{ $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' }}>
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        @endforeach

        {{-- Prev / Next --}}
        <button onclick="heroSlide(-1)" class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-gray-800 items-center justify-center shadow-lg transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button onclick="heroSlide(1)" class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-gray-800 items-center justify-center shadow-lg transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>

        {{-- Dot indicators --}}
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-1.5" id="heroDots">
            @foreach($banners as $i => $banner)
            <button onclick="heroGoTo({{ $i }})"
                    class="hero-dot h-1.5 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-white w-5' : 'bg-white/50 w-1.5 hover:bg-white/80' }}">
            </button>
            @endforeach
        </div>
    </div>

</section>

@push('scripts')
<script>
(function () {
    const slides = document.querySelectorAll('.hero-slide');
    const dots   = document.querySelectorAll('.hero-dot');
    let current  = 0, timer;
    function goTo(n) {
        slides[current].classList.replace('opacity-100','opacity-0');
        dots[current].classList.remove('bg-white','w-5');
        dots[current].classList.add('bg-white/50','w-1.5');
        current = (n + slides.length) % slides.length;
        slides[current].classList.replace('opacity-0','opacity-100');
        dots[current].classList.remove('bg-white/50','w-1.5');
        dots[current].classList.add('bg-white','w-5');
    }
    function start() { timer = setInterval(() => goTo(current + 1), 5000); }
    function stop()  { clearInterval(timer); }
    window.heroSlide = (d) => { stop(); goTo(current + d); start(); };
    window.heroGoTo  = (n) => { stop(); goTo(n); start(); };
    document.getElementById('heroSlider').addEventListener('mouseenter', stop);
    document.getElementById('heroSlider').addEventListener('mouseleave', start);
    start();
})();
</script>
<script>
document.addEventListener('click', function (e) {
    var facade = e.target.closest('.yt-facade');
    if (!facade) return;
    var id = facade.dataset.videoId;
    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
    iframe.title = facade.title;
    iframe.frameBorder = '0';
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
    iframe.allowFullscreen = true;
    iframe.className = 'w-full h-full';
    facade.replaceWith(iframe);
});
</script>
@endpush

{{-- ============================================================
     COMBINED STRIP — stats + features in one row
     ============================================================ --}}
<section class="py-5 bg-white border-t border-b border-gray-200">
    <div class="container-xl">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 border-l border-t border-gray-200 rounded-lg overflow-hidden">

            {{-- 10+ Years of Experience --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <div class="text-2xl font-bold text-brand-500">10+</div>
                <div class="text-gray-800 font-semibold text-xs mt-0.5">Years of Experience</div>
                <div class="text-gray-800 text-xs">Since 2016</div>
            </div>

            {{-- 500+ Happy Clients --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <div class="text-2xl font-bold text-brand-500">500+</div>
                <div class="text-gray-800 font-semibold text-xs mt-0.5">Happy Clients</div>
                <div class="text-gray-800 text-xs">Across PAN India</div>
            </div>

            {{-- Timely Delivery --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <svg class="w-7 h-7 text-brand-500 mb-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2a3 3 0 0 0 6 0h6a3 3 0 0 0 6 0h2v-5l-3-4zM6 18.5A1.5 1.5 0 1 1 7.5 17 1.5 1.5 0 0 1 6 18.5zm13.5-9 1.96 2.5H17V9.5h2.5zm-1.5 9A1.5 1.5 0 1 1 19.5 17 1.5 1.5 0 0 1 18 18.5z"/>
                </svg>
                <span class="text-gray-800 font-semibold text-xs leading-tight">Timely Delivery</span>
            </div>

            {{-- Satisfied Customers --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <svg class="w-7 h-7 text-brand-500 mb-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11 5.08V2c-5 .5-9 4.81-9 10s4 9.5 9 10v-3.08c-3-.48-6-3.4-6-6.92s3-6.44 6-6.92zM18.97 11H22c-.47-5-4-8.53-9-9v3.08C16 5.51 18.54 8 18.97 11zM13 18.92V22c5-.47 8.53-4 9-9h-3.03c-.43 3-2.97 5.49-5.97 5.92z"/>
                </svg>
                <span class="text-gray-800 font-semibold text-xs leading-tight">Satisfied Customers</span>
            </div>

            {{-- Customised Solutions --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <svg class="w-7 h-7 text-brand-500 mb-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"/>
                </svg>
                <span class="text-gray-800 font-semibold text-xs leading-tight">Customised Solutions</span>
            </div>

            {{-- Industrial Expertise --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <svg class="w-7 h-7 text-brand-500 mb-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 6h-2.18c.07-.44.18-.88.18-1.33C18 2.1 15.9 0 13.33 0c-1.28 0-2.5.52-3.38 1.44L9 2.5l-.94-1.06A4.67 4.67 0 0 0 4.67 0C2.1 0 0 2.1 0 4.67c0 .45.11.89.18 1.33H0v14c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 14H4v-8h16v8zm-8-2c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3z"/>
                </svg>
                <span class="text-gray-800 font-semibold text-xs leading-tight">Industrial Expertise</span>
            </div>

            {{-- Quality Brands --}}
            <div class="flex flex-col items-center justify-center px-4 py-5 text-center border-r border-b border-gray-200">
                <svg class="w-7 h-7 text-brand-500 mb-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                </svg>
                <span class="text-gray-800 font-semibold text-xs leading-tight">Quality Brands</span>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     BRAND PARTNERS — infinite marquee slider
     ============================================================ --}}
<section class="py-16 bg-white border-t border-b border-gray-100">
    <div class="container-xl mb-10 text-center">
        <p class="text-sm font-semibold uppercase tracking-widest text-gray-400">Our Trusted Brand Partners</p>
    </div>

    @php
    $partners = [
        ['img' => 'partners/PLANET-logo.jpg',       'alt' => 'Planet',      'bg' => ''],
        ['img' => 'partners/3onedata.png',           'alt' => '3onedata',    'bg' => ''],
        ['img' => 'partners/antaira_logo.webp',      'alt' => 'Antaira',     'bg' => ''],
        ['img' => 'partners/kyland_logo.webp',       'alt' => 'Kyland',      'bg' => ''],
        ['img' => 'partners/adlink_logo.webp',       'alt' => 'ADLINK',      'bg' => ''],
        ['img' => 'partners/etic_logo.png',          'alt' => 'Etic Telecom','bg' => ''],
        ['img' => 'partners/authem_logo.png',        'alt' => 'Authem',      'bg' => ''],
        ['img' => 'partners/etherwan_logo.webp',     'alt' => 'EtherWAN',    'bg' => ''],
        ['img' => 'partners/insys-icom-logo.png',    'alt' => 'INSYS icom',  'bg' => ''],
        ['img' => 'partners/portwell_logo.webp',     'alt' => 'Portwell',    'bg' => ''],
        ['img' => 'partners/tel-logo.png',           'alt' => 'TEL',         'bg' => ''],
        ['img' => 'partners/viltrus_logo.png',       'alt' => 'Viltrus',     'bg' => 'bg-slate-700 rounded-lg'],
    ];
    @endphp

    <div class="overflow-hidden relative">
        {{-- fade edges --}}
        <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

        <div class="flex partners-marquee gap-16 items-center" style="width: max-content;">
            @foreach(array_merge($partners, $partners) as $brand)
            <div class="flex items-center justify-center px-4 shrink-0 {{ $brand['bg'] }}">
                <img src="{{ asset('images/' . $brand['img']) }}"
                     alt="{{ $brand['alt'] }}"
                     class="h-14 w-auto object-contain max-w-[140px] {{ $brand['bg'] ? 'p-2' : '' }}"
                     loading="lazy" decoding="async">
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
.partners-marquee {
    animation: partners-scroll 30s linear infinite;
}
.partners-marquee:hover {
    animation-play-state: paused;
}
@keyframes partners-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>
@endpush

{{-- ============================================================
     ABOUT + SERVICES — off-white, split layout (Awura style)
     ============================================================ --}}
<section class="py-20 bg-[#EFECE5]">
    <div class="container-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left: blue box with video embed inside --}}
            <div class="relative">
                <div class="bg-brand-500 rounded-3xl p-3 shadow-2xl">
                    <div class="rounded-2xl overflow-hidden aspect-video">
                        <div class="yt-facade relative w-full h-full cursor-pointer group"
                             data-video-id="lqGhLI7hnG0"
                             title="Play BluBoxx Communication video">
                            <img src="https://i.ytimg.com/vi/lqGhLI7hnG0/hqdefault.jpg"
                                 alt="BluBoxx Communication video thumbnail"
                                 class="w-full h-full object-cover"
                                 loading="lazy" decoding="async">
                            {{-- Play button --}}
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center shadow-lg transition-transform duration-200 group-hover:scale-110">
                                    <svg class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Decorative dot grid --}}
                <div class="absolute -bottom-6 -right-6 w-24 h-24 opacity-20"
                     style="background-image: radial-gradient(#1248FC 1.5px, transparent 1.5px); background-size: 10px 10px;"></div>
            </div>

            {{-- Right: about text --}}
            <div class="space-y-4 text-gray-600 leading-relaxed text-sm">
                <p>
                    BluBoxx Communication Pvt. Ltd. is one of the Leading <strong class="text-gray-900">Name</strong> in the field of Networking Solutions.
                </p>
                <p>
                    Started in 2016, BluBoxx Communication is the Authorized Supplier of <strong class="text-gray-900">Industrial Ethernet, Fieldbus Gateways, Profibus &amp; Profinet, Industrial PC, Fibre Optics Solutions, IOT Gateways, Serial Connectivity, Modems, PLC Analyzer for PAN India.</strong>
                </p>
                <p>
                    Driven by its purpose, BluBoxx Communication strongly believes in consistently adding &amp; upgrading their offering and solutions to meet and exceed ever increasing client needs. <strong class="text-gray-900">We Deliver What We Commit :</strong> We stand true to our word, we will do all we can to fulfil our commitments. It can be any commitment made by us towards our customers, suppliers, deliveries, payments, support etc.
                </p>
                <p>
                    We will choose, find or design the best offerings for our customers. We will give the most techno-commercially optimized solution to our customers.
                </p>

                <a href="{{ url('/about-us') }}" class="btn-primary text-sm mt-4 inline-flex">
                    Learn More →
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     PRODUCTS & SERVICES — white bg, clean grid cards
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="text-center mb-12">
            <p class="section-subtitle">What We Offer</p>
            <h2 class="section-title">Our Products & Services</h2>
            <p class="text-gray-400 max-w-xl mx-auto mt-2 text-base">Comprehensive industrial networking solutions from globally trusted brands.</p>
        </div>

        @php
        $services = [
            ['img'=>'images/products/industrial_ethernet_switches/din_unmanaged.png',          'title'=>'Industrial Ethernet Switches',        'url'=>'/industrial-ethernet-switches-supplier',            'desc'=>'Managed, unmanaged, PoE, DIN-rail switches for industrial environments.'],
            ['img'=>'images/products/industrial_media_converters/serial_to_ethernet.webp',     'title'=>'Industrial Media Converters',         'url'=>'/industrial-media-converter-serial-device-servers', 'desc'=>'USB to serial, serial to Ethernet and device server solutions.'],
            ['img'=>'images/products/industrial_pcs_displays/industrial_pcs.webp',             'title'=>'Industrial PCs & Displays',           'url'=>'/industrial-pcs-displays',                         'desc'=>'Rugged industrial computers, panel PCs and display systems.'],
            ['img'=>'images/products/protocol_converters_gateways/3onedata_product.webp',      'title'=>'Protocol Converters / Gateways',      'url'=>'/protocol-converters-gateways',                    'desc'=>'Multi-protocol converters and fieldbus gateway devices.'],
            ['img'=>'images/products/profibus_profinet/profibus_tester_v5.jpg',                'title'=>'Profibus / Profinet Products',         'url'=>'/profibus-profinet-products-accessories',           'desc'=>'Testers, cables, connectors and accessories for Profibus/Profinet.'],
            ['img'=>'images/products/fiber_optics/single_mode_patch_cord.webp',                'title'=>'Fiber Optics & Network Products',      'url'=>'/fiber-optics-network-products-accessories',        'desc'=>'Patch cords, SFP transceivers and fiber optic accessories.'],
            ['img'=>'images/products/iot_gateways/teltonika_product.webp',                     'title'=>'Industrial IoT Gateways / Routers',   'url'=>'/iot-gateways',                                    'desc'=>'Remote access gateways, 4G/LTE routers and industrial modems.'],
            ['img'=>'images/products/diagnosis_network_audit/profibus_diagnosis.png',          'title'=>'Diagnosis & Network Audit',           'url'=>'/diagnosis-and-network-audit-services',            'desc'=>'On-site Profibus/Profinet diagnosis and network audit services.'],
            ['img'=>'images/products/plc_analyzer_software/hardware.webp',                     'title'=>'PLC-Analyzer Software',               'url'=>'/plc-analyzer-software',                           'desc'=>'Hardware and software tools for PLC and fieldbus analysis.'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $svc)
            <a href="{{ url($svc['url']) }}"
               class="group flex flex-col bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 overflow-hidden transition-all duration-300">

                {{-- Image --}}
                <div class="w-full h-48 bg-gray-50 flex-shrink-0">
                    <img src="{{ asset($svc['img']) }}"
                         alt="{{ $svc['title'] }}"
                         class="w-full h-full object-contain p-6 group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy" decoding="async">
                </div>

                {{-- Content --}}
                <div class="flex flex-col flex-1 p-5 border-t border-gray-100">
                    <h3 class="font-bold text-gray-900 text-base mb-2 group-hover:text-brand-500 transition-colors leading-snug">{{ $svc['title'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed flex-1">{{ $svc['desc'] }}</p>
                    <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-500 mt-4 group-hover:gap-2.5 transition-all duration-200">
                        View Products
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     SATISFIED CUSTOMERS — off-white marquee
     ============================================================ --}}
<section class="py-20 bg-[#EFECE5] overflow-hidden">
    <div class="container-xl mb-10 text-center">
        <p class="section-subtitle">Trusted By</p>
        <h2 class="section-title">Satisfied Customers</h2>
    </div>

    @php
    $clientFiles = array_merge(
        array_map(fn($n) => $n.'.webp', range(1,19)),
        ['20.jpeg','21.jpeg'],
        array_map(fn($n) => $n.'.webp', range(22,43))
    );
    @endphp

    <div class="marquee-wrapper relative">
        <div class="absolute left-0 top-0 h-full w-24 bg-gradient-to-r from-[#EFECE5] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 h-full w-24 bg-gradient-to-l from-[#EFECE5] to-transparent z-10 pointer-events-none"></div>
        <div class="marquee-track">
            @foreach(array_merge($clientFiles, $clientFiles) as $file)
            <div class="group mx-3 flex-shrink-0 w-52 h-32 bg-white border border-gray-200 rounded-2xl flex items-center justify-center p-4 hover:border-brand-400 hover:shadow-md transition-all duration-300">
                <img src="{{ asset('images/clients/' . $file) }}" alt="Client" class="h-16 w-auto max-w-full object-contain group-hover:scale-105 transition-transform duration-300" loading="lazy" decoding="async">
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
