@extends('layouts.app')

@section('title', 'Patch Cord SC-SC Duplex 5 Mtrs Singlemode Supplier in Pune & PAN India')
@section('meta_description', 'BluBoxx Communication supplies Single Mode Fiber Optic Patch Cord SC-SC Duplex 5 Mtrs. High Quality and Cost-effective Fiber Optic Patch Cords. Supplier & Dealer in Pune, PAN India.')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-gray-50 border-b border-gray-200 py-3">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-500 flex-wrap">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fiber-optics-network-products-accessories') }}" class="hover:text-brand-500 transition-colors">Fiber Optics / Network Products &amp; Accessories</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fibre-optics-solutions/fo-patch-cords') }}" class="hover:text-brand-500 transition-colors">FO Patch Cords</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ url('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord') }}" class="hover:text-brand-500 transition-colors">FO Patch Cord</a>
            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-gray-700 font-medium">Patch Cord SC-SC Duplex 5 Mtrs Singlemode</span>
        </nav>
    </div>
</div>

{{-- Hero --}}
<div class="bg-white py-14 text-center border-b border-gray-100">
    <div class="container-xl">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-3">Fiber Optics / Network Products &amp; Accessories</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-dark tracking-tight leading-tight max-w-4xl mx-auto">
            Fiber Patch Cord<br>Single Mode
        </h1>
        <p class="mt-4 text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
            High Quality and Cost-effective Fiber Optic Patch Cords.
        </p>
    </div>
</div>

@include('partials.products-horizontal-nav', ['activeNav' => 'fiber-optics'])

{{-- Main Content --}}
<div class="container-xl py-10">

    {{-- Product Header Card --}}
    <div class="flex items-center gap-6 bg-white border border-gray-200 rounded-2xl p-6 mb-8">
        <div class="flex-shrink-0 w-32 h-24">
            <img src="{{ asset('images/products/fiber_optics/single_mode_patch_cord.webp') }}"
                 alt="Fiber Patch Cord Single Mode"
                 class="w-full h-full object-contain">
        </div>
        <div>
            <h2 class="text-lg font-bold text-brand-600">Fiber patch cord Single Mode</h2>
            <p class="text-sm text-brand-400 mt-1">High Quality and Cost-effective Fiber Optic Patch Cords</p>
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
    <div id="tab-description" class="text-sm text-gray-700 leading-relaxed space-y-4 max-w-4xl">
        <p>
            Fiber Optic Patch Cable, often called Fiber Optic Patch Cord or Fiber jumper Cable, is a fiber optic cable terminated with fiber optic connectors on both ends. The Fiber Optic Patch Cord is suitable for Fast Ethernet, Gigabit Ethernet and Fiber channel applications, such as in Data Centres, Telecom Room, Server Farms, Cloud Storage Networks and any place where Fiber jumper cables are needed.
        </p>
        <p>
            It is Push-Pull type fiber optic Connector has an advantage in keyed connectors to supports Send/Receive channels. The fiber optic patch cord is optically tested for insertion loss to ensure high quality. We offer Same and Hybrid Fiber Patch Cords in custom lengths.
        </p>
        <ol class="list-decimal list-inside space-y-2 pl-2">
            <li>
                <strong>Same connector type fiber patch cable:</strong> This fiber optic patch cable has the same type of connector on both ends, such as ST, SC, LC etc.
            </li>
            <li>
                <strong>Hybrid fiber optic patch cables:</strong> This fiber optic patch cable has different connectors on each end. For e.g. One end can be SC and the other end can be LC, ST etc.
            </li>
        </ol>
    </div>

    {{-- Specification Tab --}}
    <div id="tab-specification" class="max-w-4xl hidden">
        <p class="text-xs font-bold uppercase tracking-widest text-brand-500 mb-4">Technical Specifications</p>
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <table class="w-full text-sm">
                <tbody>
                    @foreach([
                        ['Connector',             'SC to LC, SC to ST'],
                        ['Fiber Mode',            'Single Mode : 9/125μm'],
                        ['Polish',                'UPC to UPC'],
                        ['Fiber Type',            'Duplex'],
                        ['Insertion loss',        '≤ 0.20 dB'],
                        ['Return loss',           '≥ 50 dB ( UPC )'],
                        ['Typical Change',        '1000 Matings'],
                        ['Operating temperature', '-20~75°C'],
                        ['Polarity',              'A(Tx) to B(Rx)'],
                        ['Jacket OD',             '2.0mm'],
                        ['Jacket Color',          'Yellow, Orange, Aqua Marine'],
                        ['Wavelength',            '1550/1300nm'],
                        ['Jacket Material',       'PVC'],
                        ['Interchangeability',    '≤0.2dB'],
                        ['Vibration',             '≤0.2dB'],
                        ['Length',                '3m'],
                        ['Storage temperature',   '-45~85°C'],
                        ['Fiber Grade',           'G.651'],
                    ] as $i => $row)
                    <tr class="{{ $i % 2 === 0 ? 'bg-gray-50' : 'bg-white' }}">
                        <td class="px-6 py-3 font-medium text-brand-600 w-1/2">{{ $row[0] }}</td>
                        <td class="px-6 py-3 text-gray-700">{{ $row[1] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

</div>

@endsection
