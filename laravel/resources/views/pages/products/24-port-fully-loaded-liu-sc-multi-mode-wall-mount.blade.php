@extends('layouts.app')

@section('title', '24 Port Fully Loaded LIU SC Multi Mode Wall Mount Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication supplies 24 Port Fully Loaded LIU SC Multi Mode Wall Mount. Lightguide Interconnect Unit for housing Singlemode and Multimode Fiber Optic Connections. Supplier & Dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fiber-optics-network-products-accessories') }}" class="hover:text-brand-500 transition-colors">Fiber Optics / Network Products &amp; Accessories</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fibre-optics-solutions/liu-2') }}" class="hover:text-brand-500 transition-colors">LIU</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu') }}" class="hover:text-brand-500 transition-colors">24 Port Fully Loaded LIU</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">24 Port Fully Loaded LIU_SC Multi Mode Wall Mount</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-3">Fiber Optics / Network Products &amp; Accessories</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-4xl mx-auto">
            24 Port Fully Loaded LIU_SC<br>Multi Mode Wall Mount
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            Lightguide Interconnect Unit for housing Singlemode and Multimode Fiber Optic Connections.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'fiber-optics'])

{{-- Main Content --}}
<div class="container-xl py-10">

    {{-- Product Header Card --}}
    <div class="flex items-center gap-6 bg-white border border-gray-200 rounded-2xl p-6 mb-8">
        <div class="flex-shrink-0 overflow-hidden" style="width:200px; height:160px;">
            <img src="{{ asset('images/products/fiber_optics/liu/24_port_full/liuuuu-1.png') }}"
                 alt="24 Port Fully Loaded LIU_SC Multi Mode Wall Mount"
                 style="width:100%; height:100%; object-fit:contain;">
        </div>
        <div>
            <h2 class="text-lg font-bold text-brand-600">24 Port Fully Loaded LIU_SC Multi Mode Wall Mount</h2>
            <p class="text-sm text-gray-600 mt-2 max-w-xl leading-relaxed">
                Lightguide Interconnect Unit (LIU) is used for housing Singlemode and Multimode Fiber Optic Connections.
                Having a small footprint this unit is apt for installation within the confined space of Telecom and Electrical cabinets.
            </p>
        </div>
    </div>

    {{-- Tabs --}}
    <div class="flex border-b border-gray-200 mb-8">
        <button id="tab-btn-description"
                onclick="switchTab('description')"
                class="px-8 py-3 text-sm font-semibold transition-colors rounded-tl-lg rounded-tr-lg bg-brand-500 text-white">
            Description
        </button>
        <button id="tab-btn-specification"
                onclick="switchTab('specification')"
                class="px-8 py-3 text-sm font-semibold transition-colors rounded-tl-lg rounded-tr-lg text-gray-600 hover:text-brand-500">
            Specification
        </button>
    </div>

    {{-- Description Tab --}}
    <div id="tab-description" class="text-sm text-gray-700 leading-relaxed space-y-5 max-w-4xl">
        <p>
            Lightguide Interconnect Unit (LIU) is used for housing Singlemode and Multimode Fiber Optic Connections.
            Having a small footprint this unit is apt for installation within the confined space of Telecom and Electrical cabinets.
            Excellent design, superior management and robust construction is the hallmark of this make-in-India Wall Mount LIU.
        </p>

        <div>
            <p class="font-bold text-gray-900 mb-1">Robust Construction</p>
            <p>
                Wall Mount LIU, as the name suggest is specifically designed to mount on a wall surface.
                Engineered for ease of use in congested spaces, such as Electrical Panel. It has a high impact metal housing,
                powder coated against corrosive elements.
            </p>
        </div>

        <div>
            <p class="font-bold text-gray-900 mb-1">Multiple Cable Entry</p>
            <p>
                The LIU provides easy entry of cables from both Top &amp; Bottom alongwith PG21 glands for quick and secure
                anchoring of the incoming cables. Upon entry, it also has a cable holder Mid-way as an additional anchor.
                It accommodates Singlemode &amp; Multimode Cables in both Unarmoured &amp; Armoured variant.
            </p>
        </div>

        <div>
            <p class="font-bold text-gray-900 mb-1">Splice Tray</p>
            <p>
                A unique feature of our LIU is its Splice tray. The usual practise of routing Fragile unshielded Fiber Cores
                through Clips damages the un-shielded fiber as well as its splicing. Hence we have installed a specially
                designed splice tray engineered to fit inside the small area of this Wall Mount LIU. Beside protection
                of the Core, splice tray plays an important part of maintaining Bend Radius of the Fiber. This Splice also
                has a cover to protect the fiber core from accidental damage.
            </p>
        </div>

        <div>
            <p class="font-bold text-gray-900 mb-1">Make in India</p>
            <p>
                This product is designed &amp; manufactured in India by people with deep expertise in such products.
                This is specifically for made for deployment in Indian environment. Few items like coupler / connecter may be imported.
                The above mentioned design may vary based on input and product experience from end user's and industry.
            </p>
        </div>
    </div>

    {{-- Specification Tab --}}
    <div id="tab-specification" class="max-w-4xl hidden">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-4">Technical Specifications</p>
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <table class="w-full text-sm">
                <tbody>
                    @foreach([
                        ['Material',            'LIU – Metal Body Splice Tray - HIPS Flame'],
                        ['Capacity',            '16 - 6 Core Fiber'],
                        ['Life',                '1000 times'],
                        ['Connector Loss',      '≤0.5dB'],
                        ['Working Wavelength',  '850, 1310, 1550nm'],
                        ['Relative Humidity',   '≤ 85% (30°)'],
                        ['Colour',              'White, Off-White, Black'],
                        ['Dimensions',          'LIU 185 x 125 x 60mm ( L x W x H )<br>Splice Tray – 160 x 100 x 12in'],
                        ['Back Wave Loss',      'PC≥40dB, UPC≥50dB, APC≥60dB'],
                        ['Working temperature', '-40°C to +55°C'],
                        ['Nomenclature',        'Fiber Splice Enclosure, Fiber Termination Box, Fiber Cable Distribution Box'],
                    ] as $i => $row)
                    <tr class="{{ $i % 2 === 0 ? 'bg-gray-50' : 'bg-white' }}">
                        <td class="px-6 py-3 font-medium text-brand-600 w-1/3">{{ $row[0] }}</td>
                        <td class="px-6 py-3 text-gray-700">{!! $row[1] !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@push('scripts')
<script>
    function switchTab(tab) {
        ['description', 'specification'].forEach(function(t) {
            document.getElementById('tab-' + t).classList.add('hidden');
            var btn = document.getElementById('tab-btn-' + t);
            btn.classList.remove('bg-brand-500', 'text-white');
            btn.classList.add('text-gray-600', 'hover:text-brand-500');
        });
        document.getElementById('tab-' + tab).classList.remove('hidden');
        var activeBtn = document.getElementById('tab-btn-' + tab);
        activeBtn.classList.add('bg-brand-500', 'text-white');
        activeBtn.classList.remove('text-gray-600', 'hover:text-brand-500');
    }
</script>
@endpush

@endsection
