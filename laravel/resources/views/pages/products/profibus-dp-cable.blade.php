@extends('layouts.app')

@section('title', 'Profibus DP Cable Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication is an authorized supplier of Belden & LAPP Profibus DP Cable in Pune & PAN India. 22 AWG, FHDPE insulation, overall Beldfoil® shielded, tinned copper braid, PVC jacket.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/profibus-profinet-products-accessories') }}" class="hover:text-brand-500 transition-colors">Profibus / Profinet Products &amp; Accessories</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Profibus DP Cable</span>
        </nav>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'profibus-profinet'])

<div class="container-xl py-10">

    {{-- Product Header Card --}}
    <div class="border border-gray-200 rounded-xl p-6 flex flex-col sm:flex-row items-start gap-6 mb-8">
        <div class="flex-shrink-0 w-40 h-28 flex items-center justify-center">
            <img src="{{ asset('images/products/profibus_profinet/profibus_cable.png') }}"
                 alt="Profibus DP Cable"
                 class="max-w-full max-h-full object-contain">
        </div>
        <div class="flex-1">
            <h1 class="text-xl font-bold text-brand-500 mb-2">Profibus DP Cable</h1>
            <p class="text-sm text-gray-600 leading-relaxed">
                22 AWG solid (1&times;22) bare copper conductors, FHDPE insulation, overall Beldfoil&reg; shielded, tinned copper braid, overall PVC jacket.
            </p>
        </div>
    </div>

    {{-- Tabs --}}
    <div id="product-tabs">

        {{-- Tab Bar --}}
        <div class="flex border-b border-gray-200 mb-6">
            <button id="tab-btn-description"
                    onclick="switchTab('description')"
                    class="px-6 py-3 text-sm transition-colors -mb-px bg-white border-b-2 border-brand-500 text-brand-600 font-semibold">
                Description
            </button>
            <button id="tab-btn-specification"
                    onclick="switchTab('specification')"
                    class="px-6 py-3 text-sm transition-colors bg-white text-gray-500 hover:text-gray-700 border-b-2 border-transparent">
                Specification
            </button>
        </div>

        {{-- Description Tab --}}
        <div id="tab-description" class="text-sm text-gray-700 leading-relaxed space-y-4 max-w-4xl">
            <p>
                Although Belden ("Belden") makes every reasonable effort to ensure their accuracy at the time of this publication, information and specifications described herein are subject to error or omission and to change without notice, and the listing of such information and specifications does not ensure product availability.
            </p>
            <p>
                Belden provides the information and specifications herein on an "AS IS" basis, with no representations or warranties, whether express, statutory or implied. In no event will Belden be liable for any damages (including consequential, indirect, incidental, special, punitive, or exemplary damages) whatsoever, even if Belden has been advised of the possibility of such damages, whether in an action under contract, negligence or any other theory, arising out of or in connection with the use, or inability to use, the information or specifications described herein.
            </p>
            <p>
                All sales of Belden products are subject to Belden's standard terms and conditions of sale. Belden believes this product to be in compliance with the following environmental regulations: California Proposition 65 Consent Judgment For Wire &amp; Cable Mfgs. (San Francisco Superior Court Nos. 312962 And 320342); EU RoHS (Directive 2002/95/EC, 27-Jan2003); Material manufactured prior to the compliance date may still be in stock at Belden facilities and in our Distributor's inventory. EU ELV (Directive 2000/53/EC, 18-Sept-2000); EU WEEE (Directive 2002/96/EC, 27-Jan-2003); And EU BFR (Directive 2003/11/EC, 6-Feb-2003). The information provided in this Product Disclosure, and the identification of materials listed as reportable or restricted within the Product Disclosure, is correct to the best of Belden's knowledge, information and belief at the date of its publication. The information provided in the Product Disclosure is designed only as a general guide for the safe handling, storage, and any other operation of the product itself or the one that it becomes a part of. This Product Disclosure is not to be considered a warranty or quality specification. Regulatory information is for guidance purposes only. Product users are responsible for determining the applicability of legislation and regulations based on their individual usage of the product.
            </p>
            <p>
                Belden declares this product to be in compliance with EU LVD (Low Voltage Directive 73/23/EEC), as amended by directive 93/68/EEC.
            </p>
        </div>

        {{-- Specification Tab --}}
        <div id="tab-specification" class="max-w-4xl hidden">
            @php
            $specs = [
                'CONDUCTOR' => [
                    'Number of Conductors'      => '2',
                    'Nom. Conductor Stranding'  => '1/0.65 mm',
                    'Nominal Conductor Gauge'   => '22 AWG',
                    'Conductor Material'        => 'BC – Bare Copper',
                ],
                'INSULATION' => [
                    'Insulation Material'       => 'FHDPE – Foam High Density Polyethylene',
                    'Nom. Insulation Diameter'  => '2.5 mm',
                ],
                'OVERALL CABLING' => [
                    'Overall Cabling Lay'       => '70 mm',
                    'Color Code Chart'          => "1 Red\n2 Green",
                ],
                'OVERALL SHIELD' => [
                    'Overall Shield Type – Layer 1'             => 'Tape',
                    'Overall Shield Material – Layer 1'         => 'Aluminum Foil Polyester Tape',
                    'Overall Shield Coverage (%) – Layer 1'     => '100',
                    'Overall Shield Type – Layer 2'             => 'Braid',
                    'Overall Shield Material – Layer 2'         => 'Tinned Copper',
                    'Overall Shield Coverage (%) – Layer 2'     => 'Nom. 55',
                ],
                'OUTER JACKET' => [
                    'Outer Jacket Material'             => 'PVC - Polyvinyl Chloride',
                    'Nom. Outer Jacket Wall Thickness'  => '1.0 mm',
                ],
                'OVERALL NOMINAL DIAMETER' => [
                    'Overall Nominal Diameter'  => '7.8 mm',
                ],
                'MECHANICAL CHARACTERISTICS' => [
                    'Temperature Rating'    => '- 20°C To + 70°C',
                    'Min. bending radius'   => '15 x Cable Diameter',
                ],
                'APPLICABLE STANDARDS' => [
                    'EU RoHS Compliant (Y/N)'   => 'Y',
                    'EU RoHS Compliance Date'   => 'June 2007',
                ],
                'FLAME TEST' => [
                    'Flame Test'    => 'IEC 60332-1',
                ],
                'PLENUM/NON-PLENUM' => [
                    'Plenum (Y/N)'  => 'N',
                ],
                'ELECTRICAL CHARACTERISTICS' => [
                    'Nom. Conductor DC Resistance @ 20°C'   => '16 Ω/kft',
                    'Nom. Capacitance Conductor to Conductor' => '8.5 pF/ft',
                    'Nom. Impedance (3MHz ~ 20MHz)'         => '150 +/- 15 Ohms',
                    'Nom. Velocity of Propagation'          => '78 %',
                    'Max. Attenuation @ 0.2 MHz'            => '1.10 dB/100mtr',
                    'Max. Attenuation @ 4 MHz'              => '2.65 dB/100mtr',
                    'Max. Attenuation @ 16 MHz'             => '5.40 dB/100mtr',
                    'Max. Operating Voltage'                => '300 V',
                ],
            ];
            @endphp

            @foreach($specs as $group => $rows)
            <div class="mb-1">
                <div class="bg-gray-100 px-4 py-2 text-xs font-bold uppercase tracking-wider text-gray-600">
                    {{ $group }}
                </div>
                @foreach($rows as $label => $value)
                <div class="flex border-b border-gray-100 px-4 py-2.5 {{ $loop->even ? 'bg-gray-50' : 'bg-white' }}">
                    <span class="w-1/2 text-sm text-brand-500">{{ $label }}</span>
                    <span class="w-1/2 text-sm text-gray-700 whitespace-pre-line">{{ $value }}</span>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

    </div>{{-- /product-tabs --}}

    {{-- Related Products --}}
    <div class="border border-gray-200 rounded-2xl p-8 mt-12">
        <h2 class="text-lg font-bold text-brand-500 text-center mb-6">Related Products</h2>
        @php
        $related = [
            ['name' => 'IGW1114',    'img' => 'igw1114.webp',    'url' => url('/iot-gateways/iotrouterandgetways')],
            ['name' => 'ISW-1600T',  'img' => 'isw-1600t.webp',  'url' => url('/industrial-ethernet-switches-supplier')],
            ['name' => 'IGS-501T',   'img' => 'igs-501t.webp',   'url' => url('/industrial-ethernet-switches-supplier')],
            ['name' => 'MRX5 LAN',   'img' => 'mrx5-lan.webp',   'url' => url('/cellular-router-gateway')],
        ];
        @endphp
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach($related as $item)
            <a href="{{ $item['url'] }}" class="group border border-gray-200 rounded-xl p-4 flex flex-col items-center gap-3 hover:border-brand-300 hover:shadow-sm transition-all duration-200">
                <div class="w-full h-24 flex items-center justify-center">
                    @if(file_exists(public_path('images/products/related/' . $item['img'])))
                    <img src="{{ asset('images/products/related/' . $item['img']) }}"
                         alt="{{ $item['name'] }}"
                         class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-300">
                    @else
                    <div class="w-full h-full flex items-center justify-center bg-gray-100 rounded-lg">
                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18"/></svg>
                    </div>
                    @endif
                </div>
                <span class="text-sm text-brand-500 group-hover:text-brand-600 font-medium text-center transition-colors">{{ $item['name'] }}</span>
            </a>
            @endforeach
        </div>
    </div>

    {{-- SEO Text --}}
    <div class="mt-10 text-sm text-gray-600 leading-relaxed space-y-1">
        <p>If you are looking for the Supplier of <strong>Belden Profibus Cable</strong> &amp; <strong>LAPP Profibus Cable</strong>, then you can contact us now &amp; get instant quote.</p>
        <p>We Provide All Types of Profibus Cables in Pune, Mumbai, Kolkata, Bangalore, Chennai, Hyderabad, Delhi, Noida, Thane, Indore, Jaipur, Nagpur, Mangalore, Nashik, Coimbatore, Bhopal, Baroda, Surat, Ahmedabad, GOA, Gurgaon, PAN India.</p>
    </div>

</div>

@push('scripts')
<script>
function switchTab(name) {
    ['description', 'specification'].forEach(function (t) {
        var panel = document.getElementById('tab-' + t);
        var btn   = document.getElementById('tab-btn-' + t);
        if (t === name) {
            panel.classList.remove('hidden');
            btn.classList.add('border-brand-500', 'text-brand-600', 'font-semibold');
            btn.classList.remove('border-transparent', 'text-gray-500');
        } else {
            panel.classList.add('hidden');
            btn.classList.remove('border-brand-500', 'text-brand-600', 'font-semibold');
            btn.classList.add('border-transparent', 'text-gray-500');
        }
    });
}
</script>
@endpush

@endsection
