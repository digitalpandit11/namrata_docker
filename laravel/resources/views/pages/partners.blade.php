@extends('layouts.app')

@section('title', 'Our Partners')
@section('meta_description', 'BluBoxx Communication — Authorized distributor and technology partner of Portwell, ADLINK, EtherWAN, Planet, 3onedata, Antaira, Kyland, Teltonika and more.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-gray-50 border-b border-gray-200 py-14">
    <div class="container-xl">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand-500">Partners</span>
        </nav>
        <p class="section-subtitle">Technology Alliances</p>
        <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">Our Partners</h1>
        <p class="text-gray-500 max-w-2xl text-lg">
            Authorized distributor and technology partner of world-leading industrial networking brands — bringing the best hardware to Indian industries.
        </p>
    </div>
</section>

{{-- STATS STRIP --}}
<div class="bg-brand-500">
    <div class="container-xl">
        <div class="grid grid-cols-3 divide-x divide-white/20 text-white text-center">
            <div class="py-5">
                <div class="text-2xl font-bold">12+</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Global Partners</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">8+</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Countries</div>
            </div>
            <div class="py-5">
                <div class="text-2xl font-bold">500+</div>
                <div class="text-xs text-brand-100 font-medium mt-0.5">Products Available</div>
            </div>
        </div>
    </div>
</div>

{{-- PARTNERS GRID --}}
<section class="py-20 bg-gray-50">
    <div class="container-xl">
        <div class="text-center mb-14">
            <p class="section-subtitle">Authorized Distributors</p>
            <h2 class="section-title">Brand Partners</h2>
            <p class="text-gray-500 max-w-xl mx-auto">We represent and distribute products from globally recognised industrial networking brands across India.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
            $partners = [
                [
                    'name'    => 'Portwell',
                    'logo'    => 'portwell_logo.webp',
                    'address' => '3rd Floor, Jeet Dynasty, Old Madras Rd, next to Gopalan Signature Mall, Nagavarapalya, Bennigana Halli, Bengaluru, Karnataka 560093',
                    'website' => 'https://www.portwell.in/',
                    'country' => 'India',
                    'flag'    => '🇮🇳',
                ],
                [
                    'name'    => 'ADLINK Technology India Private Limited',
                    'logo'    => 'adlink_logo.webp',
                    'address' => 'Ground Floor, 317, Samanvitha Complex, Mayura Street, Outer Ring Road, Byatarayanapura, Bangalore North, Bangalore – 560092, Karnataka',
                    'website' => 'https://www.adlinktech.com/',
                    'country' => 'India',
                    'flag'    => '🇮🇳',
                ],
                [
                    'name'    => 'EtherWAN Systems, Inc.',
                    'logo'    => 'etherwan_logo.webp',
                    'address' => '7F., No. 150, Jian 1st Rd., Zhonghe Dist., New Taipei City 235, Taiwan',
                    'website' => 'https://www.etherwan.com/',
                    'country' => 'Taiwan',
                    'flag'    => '🇹🇼',
                ],
                [
                    'name'    => 'INSYS icom',
                    'logo'    => 'insys-icom-logo.png',
                    'address' => 'Hermann-Köhl-Str. 22, D-93049 Regensburg, Germany',
                    'website' => 'https://www.insys-icom.com/en/',
                    'country' => 'Germany',
                    'flag'    => '🇩🇪',
                ],
                [
                    'name'    => 'Planet Networking & Communication',
                    'logo'    => 'PLANET-logo.jpg',
                    'address' => '11F., No. 96, Minquan Rd., Xindian Dist., New Taipei City 231, Taiwan (R.O.C)',
                    'website' => 'https://www.planet.com.tw/',
                    'country' => 'Taiwan',
                    'flag'    => '🇹🇼',
                ],
                [
                    'name'    => '3onedata',
                    'logo'    => '3onedata.png',
                    'address' => '3/B Zone 1 Baiwangxin High Technology Industrial Park, Song Bai Road, Nanshan District, Shenzhen, 518101, China',
                    'website' => 'https://www.3onedata.com/',
                    'country' => 'China',
                    'flag'    => '🇨🇳',
                ],
                [
                    'name'    => 'Etic Telecom',
                    'logo'    => 'etic_logo.png',
                    'address' => '13 chemin du Vieux Chêne, 38240 Meylan, France',
                    'website' => 'https://www.etictelecom.com/en/',
                    'country' => 'France',
                    'flag'    => '🇫🇷',
                ],
                [
                    'name'    => 'Antaira Technologies',
                    'logo'    => 'antaira_logo.webp',
                    'address' => 'LLC 7660 Dean Martin Dr., Suite 201, Las Vegas, NV 89139, USA',
                    'website' => 'https://www.antaira.com.tw/',
                    'country' => 'USA',
                    'flag'    => '🇺🇸',
                ],
                [
                    'name'    => 'Viltrus Electronics',
                    'logo'    => 'viltrus_logo.png',
                    'logo_bg' => 'bg-gray-700',
                    'address' => 'K. Donelaičio str. 62, LT-44248 Kaunas, Lithuania',
                    'website' => 'http://www.viltrus.com/',
                    'country' => 'Lithuania',
                    'flag'    => '🇱🇹',
                ],
                [
                    'name'    => 'Autem',
                    'logo'    => 'authem_logo.png',
                    'address' => 'Dithmarscher Strasse 29, 26723 Emden, Germany',
                    'website' => 'https://www.autem.de',
                    'country' => 'Germany',
                    'flag'    => '🇩🇪',
                ],
                [
                    'name'    => 'HQS – Kyland China Kyland Technology Co., Ltd.',
                    'logo'    => 'kyland_logo.webp',
                    'address' => 'Xishanhui Building No.2, Shixing Avenue, Shijingshan District, Beijing, 100144, China',
                    'website' => 'https://www.kyland.com/',
                    'country' => 'China',
                    'flag'    => '🇨🇳',
                ],
                [
                    'name'    => 'TELTONIKA Networks, UAB',
                    'logo'    => 'tel-logo.png',
                    'address' => '#13, "C" Block, Ground Floor, Embassy Heights, Magrath Road, Ashok Nagar, Bengaluru – 560025',
                    'website' => 'https://teltonika-networks.com/',
                    'country' => 'India',
                    'flag'    => '🇮🇳',
                ],
            ];
            @endphp

            @foreach($partners as $partner)
            <div class="bg-white rounded-xl border border-gray-100 hover:border-brand-200 hover:shadow-lg transition-all duration-300 group flex flex-col">

                {{-- Logo area --}}
                <div class="flex items-center justify-center h-32 px-8 border-b border-gray-100 rounded-t-xl bg-gray-50 group-hover:bg-brand-50 transition-colors">
                    @if($partner['logo'])
                        @if(isset($partner['logo_bg']))
                            <div class="rounded-lg px-4 py-3 {{ $partner['logo_bg'] }}">
                                <img src="{{ asset('images/partners/' . $partner['logo']) }}" alt="{{ $partner['name'] }}" class="max-h-12 max-w-full object-contain">
                            </div>
                        @else
                            <img src="{{ asset('images/partners/' . $partner['logo']) }}" alt="{{ $partner['name'] }}" class="max-h-16 max-w-full object-contain">
                        @endif
                    @else
                        <span class="text-2xl font-bold text-gray-400 group-hover:text-brand-500 transition-colors text-center leading-tight">{{ $partner['name'] }}</span>
                    @endif
                </div>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-start justify-between gap-2 mb-3">
                        <h3 class="font-semibold text-dark text-base leading-snug">{{ $partner['name'] }}</h3>
                        <span class="text-lg shrink-0" title="{{ $partner['country'] }}">{{ $partner['flag'] }}</span>
                    </div>

                    <div class="flex items-start gap-2 text-sm text-gray-500 mb-4 flex-1">
                        <svg class="w-4 h-4 text-brand-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="leading-relaxed">{{ $partner['address'] }}</span>
                    </div>

                    <a href="{{ $partner['website'] }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-brand-500 hover:text-brand-700 transition-colors mt-auto">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        Visit Website
                    </a>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- CERTIFICATES SECTION --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="text-center mb-14">
            <p class="section-subtitle">Official Documentation</p>
            <h2 class="section-title">Distributor Certificates</h2>
            <p class="text-gray-500 max-w-xl mx-auto">Official authorization certificates from our brand partners, confirming BluBoxx Communication as an approved distributor.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
            $certificates = [
                [
                    'brand' => 'TELTONIKA Networks',
                    'file'  => 'Authorisation-letter-BluBoxx-Communication-Pvt-Ltd.pdf',
                    'color' => 'bg-blue-50 border-blue-100',
                    'badge' => 'bg-blue-100 text-blue-700',
                ],
                [
                    'brand' => 'Planet Technology',
                    'file'  => 'Authorized-Certification-Bluboxx-2025.pdf',
                    'color' => 'bg-sky-50 border-sky-100',
                    'badge' => 'bg-sky-100 text-sky-700',
                ],
                [
                    'brand' => '3onedata',
                    'file'  => '3ONEDATA-Authorization-Letter-2026.pdf',
                    'color' => 'bg-brand-50 border-brand-100',
                    'badge' => 'bg-brand-100 text-brand-700',
                ],
                [
                    'brand' => 'Antaira Technologies',
                    'file'  => 'Antaira-Authorization-Letter_Bluboxx-communication-pvt-ltd.pdf',
                    'color' => 'bg-orange-50 border-orange-100',
                    'badge' => 'bg-orange-100 text-orange-700',
                ],
                [
                    'brand' => 'Autem',
                    'file'  => 'AUTEM-certification.pdf',
                    'color' => 'bg-green-50 border-green-100',
                    'badge' => 'bg-green-100 text-green-700',
                ],
                [
                    'brand' => 'Portwell',
                    'file'  => 'Portwell_Authorized_Partner_-_Bluboxx_.pdf',
                    'color' => 'bg-purple-50 border-purple-100',
                    'badge' => 'bg-purple-100 text-purple-700',
                ],
            ];
            @endphp

            @foreach($certificates as $cert)
            <div class="border {{ $cert['color'] }} rounded-xl overflow-hidden hover:shadow-lg transition-shadow">

                {{-- PDF thumbnail --}}
                <div class="h-56 bg-gray-50 border-b border-gray-100 relative flex items-center justify-center overflow-hidden">
                    <canvas class="cert-canvas max-h-full w-full object-contain"
                            data-pdf="{{ asset('files/certificates/' . $cert['file']) }}"></canvas>
                    {{-- Loading spinner --}}
                    <div class="cert-loader absolute inset-0 flex items-center justify-center bg-gray-50">
                        <svg class="animate-spin w-8 h-8 text-brand-400" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                    </div>
                </div>

                {{-- Certificate info --}}
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-bold text-dark">{{ $cert['brand'] }}</h3>
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full {{ $cert['badge'] }}">Certified</span>
                    </div>
                    <p class="text-xs text-gray-500 mb-4">Authorized Distributor Certificate</p>
                    @if($cert['file'])
                        <a href="{{ asset('files/certificates/' . $cert['file']) }}" target="_blank" rel="noopener noreferrer"
                           class="btn-primary w-full justify-center text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Download Certificate
                        </a>
                    @else
                        <button disabled class="w-full inline-flex items-center justify-center gap-2 bg-gray-100 text-gray-400 font-semibold px-6 py-3 rounded-md text-sm cursor-not-allowed">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Coming Soon
                        </button>
                    @endif
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    document.querySelectorAll('.cert-canvas').forEach(function (canvas) {
        const url    = canvas.dataset.pdf;
        const loader = canvas.closest('.relative').querySelector('.cert-loader');

        pdfjsLib.getDocument(url).promise.then(function (pdf) {
            return pdf.getPage(1);
        }).then(function (page) {
            const container = canvas.parentElement;
            const scale     = container.offsetWidth / page.getViewport({ scale: 1 }).width;
            const viewport  = page.getViewport({ scale: scale });

            canvas.width  = viewport.width;
            canvas.height = viewport.height;

            page.render({ canvasContext: canvas.getContext('2d'), viewport: viewport })
                .promise.then(function () {
                    if (loader) loader.remove();
                });
        }).catch(function () {
            if (loader) loader.remove();
        });
    });
</script>
@endpush
