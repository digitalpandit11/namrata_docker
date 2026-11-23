<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6WZ45YBGRT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6WZ45YBGRT');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', 'BluBoxx Communication Pvt. Ltd. — Industrial Networking Solutions. Authorized distributor of Planet, 3onedata, Antaira, Kyland & ADLINK. ISO 9001-2015 Certified.')">
    <title>@yield('title', 'BluBoxx Communication') | We Help You Connect</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white">

    {{-- HEADER --}}
    <header class="sticky top-0 z-50">

        {{-- ROW 1: Thin top bar — brand blue, contact + socials --}}
        <div class="bg-brand-500 text-white text-xs">
            <div class="container-xl">
                <div class="flex items-center justify-between h-8">
                    {{-- Left: contact --}}
                    <div class="flex items-center divide-x divide-white/20">
                        <a href="tel:+919513164464" class="flex items-center gap-1.5 pr-4 hover:text-white/80 transition-colors">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            +91 9513164464
                        </a>
                        <a href="mailto:sales@bbcpl.in" class="flex items-center gap-1.5 pl-4 hover:text-white/80 transition-colors">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            sales@bbcpl.in
                        </a>
                    </div>
                    {{-- Right: socials --}}
                    <div class="hidden sm:flex items-center gap-3">
                        <a href="https://twitter.com/BluBoxx_IND" target="_blank" rel="noopener noreferrer" aria-label="X" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.259 5.629L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/BluBoxxIND/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/bluboxx_communication/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/bluboxx/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCZO6P-iZFLN8CQUtb5tbnDw" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="hover:text-white/70 transition-colors">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- ROW 2: Awura-style sticky nav — logo + links + CTA --}}
        <nav class="bg-white shadow-sm">
            <div class="container-xl">
                <div class="flex items-center justify-between h-16">

                    {{-- Logo --}}
                    <a href="{{ url('/') }}" class="flex-shrink-0">
                        <img src="{{ asset('images/bbcpl_logo.png') }}" alt="BluBoxx Communication Pvt. Ltd." class="h-10 w-auto">
                    </a>

                    {{-- Desktop nav links --}}
                    <div class="hidden lg:flex items-center gap-1">

                        <a href="{{ url('/') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('/') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            Home
                        </a>

                        <a href="{{ url('/about-us') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('about-us') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            About Us
                        </a>

                        {{-- Products mega-menu --}}
                        <div class="relative group">
                            <button class="flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-full transition-colors
                                           {{ (request()->is('products*') || request()->is('industrial-ethernet-switches-supplier') || request()->is('industrial-media-converter-serial-device-servers') || request()->is('industrial-pcs-displays') || request()->is('protocol-converters-gateways') || request()->is('profibus-profinet-products*') || request()->is('fiber-optics-network-products*') || request()->is('industrial-iot-gateways*') || request()->is('diagnosis-and-network-audit-services') || request()->is('plc-analyzer-software')) ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                                Products
                                <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            {{-- Mega dropdown --}}
                            <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[700px] bg-white shadow-2xl border border-gray-100 rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <div class="p-6">
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Product Categories</p>
                                    <div class="grid grid-cols-3 gap-2">
                                        @foreach([
                                            ['icon' => '🔌', 'label' => 'Industrial Ethernet Switches',                     'url' => '/industrial-ethernet-switches-supplier'],
                                            ['icon' => '🔁', 'label' => 'Industrial Media Converter / Serial Device Servers','url' => '/industrial-media-converter-serial-device-servers'],
                                            ['icon' => '🖥️', 'label' => 'Industrial PCs & Displays',                        'url' => '/industrial-pcs-displays'],
                                            ['icon' => '🔄', 'label' => 'Protocol Converters / Gateways',                   'url' => '/protocol-converters-gateways'],
                                            ['icon' => '📡', 'label' => 'Profibus / Profinet Products & Accessories',        'url' => '/profibus-profinet-products-accessories'],
                                            ['icon' => '💡', 'label' => 'Fiber Optics / Network Products & Accessories',    'url' => '/fiber-optics-network-products-accessories'],
                                            ['icon' => '🌐', 'label' => 'Industrial IoT Gateways / Modems / Routers',       'url' => '/iot-gateways'],
                                            ['icon' => '💻', 'label' => 'PLC Analyzer Software',                               'url' => '/plc-analyzer-software'],
                                        ] as $p)
                                        <a href="{{ url($p['url']) }}"
                                           class="flex items-start gap-3 p-3 rounded-xl hover:bg-brand-50 group/item transition-colors">
                                            <span class="text-xl leading-none mt-0.5">{{ $p['icon'] }}</span>
                                            <span class="text-sm text-gray-700 group-hover/item:text-brand-600 leading-snug font-medium">{{ $p['label'] }}</span>
                                        </a>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Services dropdown --}}
                        <div class="relative group">
                            <button class="flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-full transition-colors
                                           {{ request()->is('services*') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                                Services
                                <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl border border-gray-100 rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <div class="p-3">
                                    <a href="{{ url('/diagnosis-and-network-audit-services') }}"
                                       class="flex items-start gap-3 px-3 py-2.5 rounded-xl hover:bg-brand-50 transition-colors group/item">
                                        <span class="text-lg">🔍</span>
                                        <span class="text-sm text-gray-700 group-hover/item:text-brand-600 font-medium leading-snug">Diagnosis & Network Audit Services</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('/partners') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('partners') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            Partners
                        </a>

                        <a href="{{ url('/blog') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('blog*') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            Blog
                        </a>

                        <a href="{{ url('/jobs') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('jobs*') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            Career
                        </a>

                        <a href="{{ url('/contact-us') }}"
                           class="px-3 py-2 text-sm font-medium rounded-full transition-colors
                                  {{ request()->is('contact-us') ? 'text-brand-500 bg-brand-50' : 'text-gray-700 hover:text-brand-500 hover:bg-gray-50' }}">
                            Contact Us
                        </a>

                    </div>

                    {{-- Right: CTA pill + mobile toggle --}}
                    <div class="flex items-center gap-3">
                        <a href="{{ asset('files/BluBoxx-Brochure-2022.pdf') }}" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 btn-primary text-sm px-5 py-2.5">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Download Brochure
                        </a>
                        <button id="mobile-menu-btn" class="lg:hidden p-2 text-gray-600 hover:text-brand-500 rounded-full border border-gray-200 hover:border-brand-300 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        </button>
                    </div>

                </div>
            </div>
        </nav>

        {{-- Mobile Nav drawer --}}
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-gray-100 shadow-lg">
            <div class="container-xl py-4 space-y-1 max-h-[80vh] overflow-y-auto">

                <a href="{{ url('/') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Home</a>
                <a href="{{ url('/about-us') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">About Us</a>

                {{-- Products accordion --}}
                <div>
                    <button type="button" onclick="toggleMobSection('mob-products','mob-products-arrow')"
                            class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-bold text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl transition-colors">
                        <span>Products</span>
                        <svg id="mob-products-arrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="mob-products" class="hidden pl-2 space-y-0.5 mt-1">
                        <a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Industrial Ethernet Switches</a>
                        <a href="{{ url('/industrial-media-converter-serial-device-servers') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Industrial Media Converter / Serial Device Servers</a>
                        <a href="{{ url('/industrial-pcs-displays') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Industrial PCs & Displays</a>
                        <a href="{{ url('/protocol-converters-gateways') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Protocol Converters / Gateways</a>
                        <a href="{{ url('/profibus-profinet-products-accessories') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Profibus / Profinet</a>
                        <a href="{{ url('/fiber-optics-network-products-accessories') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Fiber Optics / Network Products</a>
                        <a href="{{ url('/iot-gateways') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Industrial IoT Gateways / Routers</a>
                        <a href="{{ url('/plc-analyzer-software') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">PLC Analyzer Software</a>
                    </div>
                </div>

                {{-- Services accordion --}}
                <div>
                    <button type="button" onclick="toggleMobSection('mob-services','mob-services-arrow')"
                            class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-bold text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl transition-colors">
                        <span>Services</span>
                        <svg id="mob-services-arrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="mob-services" class="hidden pl-2 space-y-0.5 mt-1">
                        <a href="{{ url('/diagnosis-and-network-audit-services') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Diagnosis & Network Audit</a>
                    </div>
                </div>

                <a href="{{ url('/partners') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Partners</a>
                <a href="{{ url('/blog') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Blog</a>
                <a href="{{ url('/jobs') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Career</a>
                <a href="{{ url('/contact-us') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:text-brand-500 hover:bg-brand-50 rounded-xl">Contact Us</a>

                <div class="pt-3 px-4 pb-2">
                    <a href="{{ url('/contact-us') }}" class="btn-primary w-full justify-center text-sm">Get a Quote</a>
                </div>
            </div>
        </div>

    </header>

    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- ENQUIRE NOW SECTION --}}
    <section id="enquire-now" class="bg-brand-500 py-14">
        <div class="container-xl">

            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <p class="text-white/70 text-sm font-semibold uppercase tracking-widest mb-2">Quick Contact</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white">Enquire Now</h2>
                    <p class="text-white/70 mt-3 text-base">Get in touch with our team for product enquiries, quotes, or support.</p>
                </div>

                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-2xl">
                    <form action="{{ url('/enquire-now') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                                    Name <span class="text-red-400">*</span>
                                </label>
                                <input type="text" name="enquire_name" required value="{{ old('enquire_name') }}"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-400 focus:border-transparent transition"
                                       placeholder="Your full name">
                                @error('enquire_name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">
                                    Contact Number <span class="text-red-400">*</span>
                                </label>
                                <input type="tel" name="enquire_phone" required value="{{ old('enquire_phone') }}"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-400 focus:border-transparent transition"
                                       placeholder="10-digit mobile number" pattern="[0-9]{10}" maxlength="10" inputmode="numeric">
                                @error('enquire_phone')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-600 uppercase tracking-wider mb-2">Email ID</label>
                                <input type="email" name="enquire_email" value="{{ old('enquire_email') }}"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-400 focus:border-transparent transition"
                                       placeholder="your@email.com">
                                @error('enquire_email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="mt-5 flex justify-center">
                            {!! NoCaptcha::display() !!}
                        </div>
                        @error('g-recaptcha-response')<p class="text-red-400 text-xs mt-1 text-center">Please verify that you are not a robot.</p>@enderror
                        <div class="mt-6 flex justify-center">
                            <button type="submit"
                                    class="bg-brand-500 hover:bg-brand-600 border-2 border-white text-white font-bold py-3 px-10 rounded-xl transition-colors duration-200 inline-flex items-center gap-2 text-base">
                                Submit Enquiry
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-dark-footer text-gray-600">

        {{-- Main footer widgets --}}
        <div class="container-xl pt-16 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

                {{-- Col 1: Brand + Social + WhatsApp + Brochure --}}
                <div>
                    <a href="{{ url('/') }}" class="inline-block mb-6">
                        <img src="{{ asset('images/bbcpl_logo.png') }}" alt="BluBoxx Communication" class="h-16 w-auto" style="mix-blend-mode: multiply;">
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-green-600 transition-colors mb-4">
                        <svg class="w-5 h-5 text-green-600 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Chat with us on WhatsApp
                    </a>

                    {{-- Download Brochure --}}
                    <div>
                        <a href="{{ asset('files/BluBoxx-Brochure-2022.pdf') }}"
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-0 border border-gray-300 hover:border-gray-400 bg-white hover:bg-gray-50 text-gray-700 text-sm rounded-full overflow-hidden transition-colors shadow-sm">
                            <span class="px-4 py-2 leading-tight">
                                Download<br>Brochure
                            </span>
                            {{-- PDF icon badge --}}
                            <span class="flex flex-col items-center justify-center bg-white border-l border-gray-300 px-3 py-1.5 self-stretch">
                                <svg class="w-6 h-7" viewBox="0 0 40 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    {{-- Page body --}}
                                    <rect x="2" y="2" width="30" height="38" rx="3" fill="#f5f5f5" stroke="#d1d5db" stroke-width="1.5"/>
                                    {{-- Folded corner --}}
                                    <path d="M24 2 L32 10 L24 10 Z" fill="#d1d5db"/>
                                    <path d="M24 2 L32 10 H24 V2 Z" fill="#e5e7eb" stroke="#d1d5db" stroke-width="1"/>
                                    {{-- Red PDF label --}}
                                    <rect x="0" y="28" width="36" height="14" rx="2" fill="#dc2626"/>
                                    <text x="18" y="39" text-anchor="middle" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white">PDF</text>
                                </svg>
                            </span>
                        </a>
                    </div>

                    {{-- TÜV Rheinland ISO Certification --}}
                    <div class="mt-5">
                        <img src="{{ asset('images/tuv-certified.jpg') }}" alt="TÜV Rheinland ISO 9001:2015 Certified" class="h-24 w-auto rounded">
                    </div>
                </div>

                {{-- Col 2: Quick Links --}}
                <div>
                    <h4 class="text-gray-900 font-semibold text-base mb-6 pb-2 border-b border-gray-300">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Home</a></li>
                        <li><a href="{{ url('/partners') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Partners</a></li>
                        <li><a href="{{ url('/blog') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Blog</a></li>
                        <li><a href="{{ url('/jobs') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Job Opportunities</a></li>
                        <li><a href="{{ url('/contact-us') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Contact Us</a></li>
                        <li><a href="https://www.youtube.com/watch?v=lqGhLI7hnG0" target="_blank" rel="noopener noreferrer" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Corporate Video</a></li>
                        <li><a href="https://youtu.be/jb5CEh3RMGs" target="_blank" rel="noopener noreferrer" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Product Video</a></li>
                        <li><a href="{{ url('/about-us') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">About Us</a></li>
                        <li><a href="{{ url('/privacy-policy-2') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Privacy Policy</a></li>
                    </ul>
                </div>

                {{-- Col 3: Contact Info + Google Review --}}
                <div>
                    <h4 class="text-gray-900 font-semibold text-base mb-6 pb-2 border-b border-gray-300">Contact Info</h4>
                    <div class="space-y-4 text-sm">
                        <p class="text-gray-900 font-medium">BluBoxx Communication Pvt. Ltd.</p>

                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-brand-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="leading-relaxed">102/B, Surekha Apartment,<br>Pune Satara Road,<br>Pune – 411037, Maharashtra, India.</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-brand-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:+919513164464" class="hover:text-brand-500 transition-colors">+91 9513164464</a>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-brand-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:sales@bbcpl.in" class="hover:text-brand-500 transition-colors">sales@bbcpl.in</a>
                        </div>
                    </div>

                    {{-- Google Review --}}
                    <div class="mt-6 pt-5 border-t border-gray-300">
                        <p class="text-xs font-semibold text-gray-900 uppercase tracking-wider mb-3">Add Review On</p>
                        <a href="https://g.page/r/CZjXXzfZlwD9EB0/review" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 border border-gray-300 rounded-full px-4 py-2.5 transition-colors text-sm text-gray-600 hover:text-gray-900 shadow-sm">
                            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            Rate us on Google
                        </a>
                    </div>
                </div>

                {{-- Col 4: Products --}}
                <div>
                    <h4 class="text-gray-900 font-semibold text-base mb-6 pb-2 border-b border-gray-300">Products</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ url('/industrial-ethernet-switches-supplier') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Industrial Ethernet Switches</a></li>
                        <li><a href="{{ url('/industrial-media-converter-serial-device-servers') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Industrial Media Converter / Serial Device Servers</a></li>
                        <li><a href="{{ url('/industrial-pcs-displays') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Industrial PCs &amp; Displays</a></li>
                        <li><a href="{{ url('/protocol-converters-gateways') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Protocol Converters / Gateways</a></li>
                        <li><a href="{{ url('/profibus-profinet-products-accessories') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Profibus / Profinet Products &amp; Accessories</a></li>
                        <li><a href="{{ url('/fiber-optics-network-products-accessories') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Fiber Optics / Network Products &amp; Accessories</a></li>
                        <li><a href="{{ url('/iot-gateways') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Industrial IoT Gateways / Modems / Routers</a></li>
                        <li><a href="{{ url('/diagnosis-and-network-audit-services') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">Diagnosis and Network Audit Services</a></li>
                        <li><a href="{{ url('/plc-analyzer-software') }}" class="hover:text-brand-500 hover:translate-x-1 inline-block transition-all duration-200">PLC-Analyzer Software</a></li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-gray-300">
            <div class="container-xl py-5 flex flex-col md:flex-row items-center justify-between gap-4">

                {{-- Copyright --}}
                <p class="text-xs text-gray-500 text-center md:text-left">
                    © {{ date('Y') }} BluBoxx Communication Pvt. Ltd. All Rights Reserved.
                    Designed &amp; Developed by
                    <a href="https://vbtek.in/" target="_blank" rel="noopener noreferrer" class="text-brand-500 hover:text-brand-600 transition-colors">VBTEK</a>
                </p>

                {{-- Social Icons --}}
                <div class="flex items-center gap-3">
                    <a href="https://twitter.com/BluBoxx_IND" target="_blank" rel="noopener noreferrer" aria-label="X / Twitter"
                       class="w-8 h-8 rounded-full bg-gray-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors duration-200">
                        <svg class="w-3.5 h-3.5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.259 5.629L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/BluBoxxIND/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                       class="w-8 h-8 rounded-full bg-gray-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors duration-200">
                        <svg class="w-3.5 h-3.5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/bluboxx_communication/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                       class="w-8 h-8 rounded-full bg-gray-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors duration-200">
                        <svg class="w-3.5 h-3.5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/bluboxx/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                       class="w-8 h-8 rounded-full bg-gray-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors duration-200">
                        <svg class="w-3.5 h-3.5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCZO6P-iZFLN8CQUtb5tbnDw" target="_blank" rel="noopener noreferrer" aria-label="YouTube"
                       class="w-8 h-8 rounded-full bg-gray-200 hover:bg-red-500 hover:text-white flex items-center justify-center transition-colors duration-200">
                        <svg class="w-3.5 h-3.5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </footer>

    {{-- Mobile bottom bar spacer --}}
    <div class="h-16 lg:hidden" aria-hidden="true"></div>

    {{-- ===== STICKY FLOATING ACTION BAR ===== --}}

    {{-- Desktop: right-side vertical floating icon buttons --}}
    <div class="hidden lg:flex fixed right-4 top-1/2 -translate-y-1/2 z-[60] flex-col gap-2">

        <a href="{{ url('/contact-us') }}" title="Enquire Now"
           class="flex items-center justify-center w-11 h-11 bg-brand-500 hover:bg-brand-600 text-white rounded-full shadow-lg transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
        </a>

        <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer" title="WhatsApp"
           class="flex items-center justify-center w-11 h-11 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition-colors duration-200">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>

        <a href="tel:+919513164464" title="Call Us"
           class="flex items-center justify-center w-11 h-11 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-lg transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        </a>

        <button data-chat-toggle title="Chat"
           class="flex items-center justify-center w-11 h-11 bg-orange-500 hover:bg-orange-600 text-white rounded-full shadow-lg transition-colors duration-200 cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </button>

    </div>

    {{-- Mobile: bottom fixed action bar (icons only) --}}
    <div class="lg:hidden fixed bottom-0 inset-x-0 z-[60] grid grid-cols-4 shadow-2xl">

        <a href="{{ url('/contact-us') }}"
           class="flex items-center justify-center py-4 bg-brand-500 active:bg-brand-600 text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
        </a>

        <a href="https://wa.link/0fsksh" target="_blank" rel="noopener noreferrer"
           class="flex items-center justify-center py-4 bg-green-500 active:bg-green-600 text-white">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>

        <a href="tel:+919513164464"
           class="flex items-center justify-center py-4 bg-blue-600 active:bg-blue-700 text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        </a>

        <button data-chat-toggle
           class="flex items-center justify-center py-4 bg-orange-500 active:bg-orange-600 text-white cursor-pointer">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
        </button>

    </div>

    {{-- Tawk.to live chat --}}
    <script>
        var Tawk_API = Tawk_API || {};
        var Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement('script'), s0 = document.getElementsByTagName('script')[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f75c155f0e7167d0015519e/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    {{-- Mobile menu toggle + Chat button --}}
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        function toggleMobSection(id, arrowId) {
            const section = document.getElementById(id);
            const arrow   = document.getElementById(arrowId);
            const isOpen  = !section.classList.contains('hidden');
            section.classList.toggle('hidden', isOpen);
            arrow.classList.toggle('rotate-180', !isOpen);
        }

        document.querySelectorAll('[data-chat-toggle]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                if (typeof Tawk_API !== 'undefined' && typeof Tawk_API.toggle === 'function') {
                    Tawk_API.toggle();
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var firstError = document.querySelector('p.text-red-400, p.text-red-500, div.bg-red-50');
            if (firstError) {
                var offset = 100;
                var top = firstError.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top: top, behavior: 'smooth' });
                firstError.closest('div')?.querySelector('input, textarea, select')?.focus();
            }
        });
    </script>

    {!! NoCaptcha::renderJs() !!}
    @stack('scripts')
</body>
</html>
