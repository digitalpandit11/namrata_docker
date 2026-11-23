@extends('layouts.app')

@section('title', 'Industrial Ethernet Switches Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication provides wide range Industrial Ethernet Switches including Unmanaged, Managed, DIN-rail, Rack-mount, EN50155, TSN, Profinet Ethernet Switches. Authorized Supplier & Dealer in Pune, PAN India.')


@section('content')

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">

        <p class="section-subtitle mb-3">Product Categories</p>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-dark tracking-tight leading-tight mx-auto">
            Industrial Ethernet Switches
        </h1>
        <p class="mt-5 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            Complete portfolio of industrial-grade switches — DIN-rail, rack-mount, managed &amp; unmanaged.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'industrial-ethernet-switches'])

{{-- Product Grid --}}
<div class="bg-white py-16">
    <div class="container-xl">

        <p class="section-subtitle mb-2">Browse by Type</p>
        <h2 class="section-title mb-10">Our Switch Portfolio</h2>

        @php
        $imgDir = 'images/products/industrial_ethernet_switches/';
        $products = [
            ['name' => 'DIN-rail Unmanaged Ethernet Switches',    'img' => 'din_unmanaged.png',                              'url' => url('/unmanaged-ethernet-switches-supplier')],
            ['name' => 'DIN-rail Managed Ethernet Switches',       'img' => 'din_managed.png',                                'url' => url('/rail-gigabit-managed-ethernet-switch-supplier')],
            ['name' => 'Industrial Power Over Ethernet Switches',  'img' => 'industrial_power_over_ethernet.png',             'url' => url('/industrial-power-over-ethernet-poe-switch-supplier')],
            ['name' => 'EN50155 Ethernet Switches',                'img' => 'EN50155_ethernet_switches.png',                  'url' => url('/en50155-ethernet-switches-supplier')],
            ['name' => 'Industrial Flat-type Ethernet Switches',   'img' => 'industrial_flat_type_ethernet_switches.png',     'url' => url('/industrial-flat-type-ethernet-switch-supplier')],
            ['name' => 'Rack-mount Ethernet Switches',             'img' => 'rack_mount_ethernet_switches.png',               'url' => url('/rack-mount-ethernet-switches-supplier')],
            ['name' => 'SFP Transceiver',                         'img' => 'sfp_transceiver.webp',                           'url' => url('/fibre-optics-solutions/sfp-transceiver')],
            ['name' => 'Network Management System',                'img' => 'network_management_system.jpg',                  'url' => url('/universal-network-management-system-software-lite')],
            ['name' => 'IEC61850-3 Ethernet Switches',             'img' => 'IEC61850_3_ethernet_switches.webp',              'url' => url('/iec61850-3-ethernet-switch')],
            ['name' => 'TSN Ethernet Switches',                    'img' => 'TSN_ethernet_switches.webp',                     'url' => url('/tsn-ethernet-switch')],
            ['name' => 'Renewable Energy Ethernet Switches',       'img' => 'renewable_energy_ethernet_switches.webp',        'url' => url('/renewable-energy-ethernet-switch')],
            ['name' => 'Profinet Ethernet Switches',               'img' => 'profinet_ethernet_switches.webp',                'url' => url('/profinet-ethernet-switch')],
            ['name' => 'Industrial Optical Fiber Bypass Switches', 'img' => 'industrial_optical_fiber_bypass_switches.webp',  'url' => url('/optical-fiber-bypass-switch')],
            ['name' => 'E-mark Certified Ethernet Switches',       'img' => 'e-mark_certified_ethernet_switches.webp',        'url' => url('/e-mark-certified-ethernet-switch')],
            ['name' => 'HSR/PRP Ethernet Switches',                'img' => 'HSR_PRP_ethernet_switches.webp',                 'url' => url('/hsr-prp-ethernet-switch')],
            ['name' => 'Nema TS2 Ethernet Switches',               'img' => 'nema_TS2_ethernet_switches.webp',                'url' => url('/nema-ts2-ethernet-switch')],
            ['name' => 'ATEX Ethernet Switches',                   'img' => 'ATEX_ethernet_switches.webp',                   'url' => url('/atex-ethernet-switches')],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
            <a href="{{ $product['url'] }}"
               class="group bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">

                {{-- Image area --}}
                <div class="w-full h-48 bg-gray-50 flex items-center justify-center">
                    @if(file_exists(public_path($imgDir . $product['img'])))
                    <img src="{{ asset($imgDir . $product['img']) }}"
                         alt="{{ $product['name'] }}"
                         class="h-full w-full object-contain p-8 group-hover:scale-105 transition-transform duration-500 ease-out">
                    @else
                    <svg class="w-14 h-14 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/>
                    </svg>
                    @endif
                </div>

                {{-- Card footer --}}
                <div class="px-5 py-4 flex items-center justify-between gap-3 border-t border-gray-100">
                    <p class="text-sm font-semibold text-gray-900 group-hover:text-brand-500 transition-colors leading-snug">
                        {{ $product['name'] }}
                    </p>
                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-gray-100 group-hover:bg-brand-500 flex items-center justify-center transition-colors duration-200">
                        <svg class="w-4 h-4 text-gray-500 group-hover:text-white group-hover:translate-x-0.5 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</div>


{{-- SEO Text --}}
<div class="bg-white py-14">
    <div class="container-xl">
        <div class="max-w-4xl text-sm text-gray-600 leading-relaxed space-y-5">

            <p>We, <strong class="text-gray-900">Bluboxx Communication</strong>, provides wide range Industrial Ethernet Switches. Our portfolio includes <strong class="text-gray-900">Unmanaged Ethernet Switch, Rail Gigabit Managed Ethernet Switch, L3 Ring Managed Industrial POE Switch, Rack-mount Managed Ethernet Switch, EN50155 Ethernet Switch, Industrial Media Converter, Industrial Flat-type Ethernet Switch, Optical Fibre Bypass Switch.</strong> We provide complete Industrial Networking Solutions across PAN India.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-2">
                {{-- Switch types list --}}
                <div>
                    <p class="font-semibold text-gray-900 mb-3">Switch Types We Supply</p>
                    <ol class="space-y-2">
                        @foreach(['Unmanaged Ethernet Switch','Rail Gigabit Managed Ethernet Switch','L3 Ring Managed Industrial POE Switch','Rack-mount Managed Ethernet Switch','EN50155 Ethernet Switch','Industrial Media Converter','Industrial Flat-type Ethernet Switch','Optical Fibre Bypass Switch'] as $i => $item)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-brand-500 text-white text-xs font-bold flex items-center justify-center">{{ $i + 1 }}</span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ol>
                </div>

                {{-- Cities --}}
                <div>
                    <p class="font-semibold text-gray-900 mb-3">Serving Across India</p>
                    <div class="grid grid-cols-2 gap-y-2 gap-x-4">
                        @foreach(['Pune','Mumbai','Kolkata','Bangalore','Chennai','Hyderabad','Delhi','Noida','Thane','Indore','Jaipur','Nagpur','Mangalore','Nashik','Coimbatore','Bhopal','Baroda','Surat','Ahmedabad','Goa','Gurgaon'] as $city)
                        <div class="flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-brand-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            <span>{{ $city }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-5">
                <p class="font-semibold text-gray-900 mb-3">People Search Us for:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Industrial Ethernet Switch Supplier','Industrial Ethernet Switch Dealer','Industrial Ethernet Switch Supplier in Pune','Industrial Ethernet Switch Dealer in Pune','Industrial Ethernet Switch'] as $tag)
                    <span class="inline-block bg-gray-50 hover:bg-brand-50 border border-gray-200 hover:border-brand-300 text-gray-600 hover:text-brand-600 text-xs px-3 py-1.5 rounded-full transition-colors cursor-default">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
