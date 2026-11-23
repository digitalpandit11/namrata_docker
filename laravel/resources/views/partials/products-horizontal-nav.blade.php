{{--
    Horizontal product category navigation bar with hover dropdowns.
    Usage: @include('partials.products-horizontal-nav', ['activeNav' => 'media-converters'])

    Accepted $activeNav values:
      'industrial-ethernet-switches' | 'media-converters' | 'industrial-pcs-displays'
      'protocol-converters' | 'profibus-profinet' | 'fiber-optics'
      'iot-gateways-routers' | 'diagnosis-network-audit' | 'plc-analyzer-software'
--}}
@php
$activeNav = $activeNav ?? '';
$navCategories = [
    [
        'id'    => 'industrial-ethernet-switches',
        'label' => 'Ethernet Switches',
        'url'   => url('/industrial-ethernet-switches-supplier'),
        'subs'  => [
            ['label' => 'DIN-rail Unmanaged Ethernet Switches',    'url' => url('/unmanaged-ethernet-switches-supplier')],
            ['label' => 'DIN-rail Managed Ethernet Switches',       'url' => url('/rail-gigabit-managed-ethernet-switch-supplier')],
            ['label' => 'Industrial Power Over Ethernet Switches',  'url' => url('/industrial-power-over-ethernet-poe-switch-supplier')],
            ['label' => 'EN50155 Ethernet Switches',               'url' => url('/en50155-ethernet-switches-supplier')],
            ['label' => 'Industrial Flat-type Ethernet Switches',   'url' => url('/industrial-flat-type-ethernet-switch-supplier')],
            ['label' => 'Rack-mount Ethernet Switches',             'url' => url('/rack-mount-ethernet-switches-supplier')],
            ['label' => 'SFP Transceiver',                         'url' => url('/fibre-optics-solutions/sfp-transceiver')],
            ['label' => 'Network Management System',                'url' => url('/universal-network-management-system-software-lite')],
            ['label' => 'IEC61850-3 Ethernet Switches',            'url' => url('/iec61850-3-ethernet-switch')],
            ['label' => 'TSN Ethernet Switches',                   'url' => url('/tsn-ethernet-switch')],
            ['label' => 'Renewable Energy Ethernet Switches',       'url' => url('/renewable-energy-ethernet-switch')],
            ['label' => 'Profinet Ethernet Switches',               'url' => url('/profinet-ethernet-switch')],
            ['label' => 'Industrial Optical Fiber Bypass Switches', 'url' => url('/optical-fiber-bypass-switch')],
            ['label' => 'E-mark Certified Ethernet Switches',       'url' => url('/e-mark-certified-ethernet-switch')],
            ['label' => 'HSR/PRP Ethernet Switches',                'url' => url('/hsr-prp-ethernet-switch')],
            ['label' => 'Nema TS2 Ethernet Switches',              'url' => url('/nema-ts2-ethernet-switch')],
            ['label' => 'ATEX Ethernet Switches',                   'url' => url('/atex-ethernet-switches')],
        ],
    ],
    [
        'id'    => 'media-converters',
        'label' => 'Media Converters',
        'url'   => url('/industrial-media-converter-serial-device-servers'),
        'subs'  => [
            ['label' => 'Serial to Fiber',            'url' => url('/serial-connectivity/serial-to-fiber')],
            ['label' => 'Ethernet to Fiber',           'url' => url('/ethernet-to-fiber')],
            ['label' => 'USB to Serial',               'url' => url('/usb-to-serial')],
            ['label' => 'Serial to Ethernet',          'url' => url('/serial-to-ethernet')],
            ['label' => 'USB to Ethernet',             'url' => url('/usb-to-ethernet')],
            ['label' => 'Protector / Repeater / Hub',  'url' => url('/protector-repeater-hub')],
            ['label' => 'Can to Fiber',                'url' => url('/can-to-fiber')],
        ],
    ],
    [
        'id'    => 'industrial-pcs-displays',
        'label' => 'Industrial PCs & Displays',
        'url'   => url('/industrial-pcs-displays'),
        'subs'  => [
            ['label' => 'Industrial PCs',       'url' => url('/industrial-pcs')],
            ['label' => 'Industrial Panel PCs', 'url' => url('/industrial-panel-pcs')],
            ['label' => 'Industrial Displays',  'url' => url('/industrial-displays')],
        ],
    ],
    [
        'id'    => 'protocol-converters',
        'label' => 'Protocol Converters',
        'url'   => url('/protocol-converters-gateways'),
        'subs'  => [
            ['label' => 'Planet',       'url' => url('/protocol-converters-gateways-planet')],
            ['label' => 'Odot',         'url' => url('/protocol-converters-gateways-odot')],
            ['label' => 'Viltrus',      'url' => url('/protocol-converters-gateways-viltrus')],
            ['label' => '3Onedata',     'url' => url('/protocol-converters-gateways-3onedata')],
            ['label' => 'ADF Web',      'url' => url('/protocol-converters-gateways-adfweb')],
            ['label' => 'Authem',       'url' => 'https://www.autem.de/products/accessories-anapro6-blackbox3/s7-lan_e/'],
            ['label' => 'Data Loggers', 'url' => url('/protocol-converters-gateways-data-loggers')],
        ],
    ],
    [
        'id'    => 'profibus-profinet',
        'label' => 'Profibus / Profinet',
        'url'   => url('/profibus-profinet-products-accessories'),
        'subs'  => [
            ['label' => 'Profibus Tester V5',       'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profibus Cable',            'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profibus Connector',        'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profinet Connector',        'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profibus Stripping Tools',  'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profinet Cable',            'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profinet Tester',           'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profinet Stripping Tools',  'url' => url('/profibus-profinet-products-accessories')],
            ['label' => 'Profinet Patch Cord',       'url' => url('/profibus-profinet-products-accessories')],
        ],
    ],
    [
        'id'    => 'fiber-optics',
        'label' => 'Fiber Optics',
        'url'   => url('/fiber-optics-network-products-accessories'),
        'subs'  => [
            ['label' => 'LIU',                      'url' => url('/fibre-optics-solutions/liu-2')],
            ['label' => 'Ethernet Patch Cord',       'url' => url('/fiber-optics-network-products-accessories')],
            ['label' => 'Single Mode Patch Cord',    'url' => url('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord/patch-cord-sc-sc-duplex-5-mtrs-singlemode')],
            ['label' => 'Multi Mode FO Patch Cord',  'url' => url('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord/patch-cord-sc-sc-duplex-5-mtrs-multimode')],
            ['label' => 'Armored FO Patch Cord',     'url' => url('/fibre-optics-solutions/fo-patch-cords')],
            ['label' => 'Power Supply',              'url' => 'https://www.meanwell.com/productSeries.aspx?i=17&c=6#tag-6-17'],
            ['label' => 'Rackmount LIU',             'url' => url('/fibre-optics-solutions/liu-2')],
        ],
    ],
    [
        'id'    => 'iot-gateways-routers',
        'label' => 'IoT Gateways & Routers',
        'url'   => url('/iot-gateways'),
        'subs'  => [
            ['label' => 'Etic Telecom', 'url' => url('/iot-gateways/iotrouterandgetways')],
            ['label' => 'INSYS icom',   'url' => url('/iot-gateways')],
            ['label' => 'Teltonika',    'url' => url('/cellular-router-gateway')],
        ],
    ],
    [
        'id'    => 'diagnosis-network-audit',
        'label' => 'Diagnosis & Audit',
        'url'   => url('/diagnosis-and-network-audit-services'),
        'subs'  => [
            ['label' => 'Ethernet Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'Profibus Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'Profinet Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'VPN Services',                       'url' => url('/contact-us')],
            ['label' => 'PLC Periodic Services',              'url' => url('/contact-us')],
        ],
    ],
    [
        'id'    => 'plc-analyzer-software',
        'label' => 'PLC Analyzer Software',
        'url'   => url('/plc-analyzer-software'),
        'subs'  => [
            ['label' => 'Hardware', 'url' => 'https://www.autem.de/products/blackbox_e/'],
            ['label' => 'Software', 'url' => 'https://www.autem.de/products/plc-analyzer-pro-6/'],
        ],
    ],
];
@endphp

{{-- MOBILE: single dropdown button --}}
<div class="md:hidden bg-white border-b border-gray-200">
    <div class="container-xl py-3">
        <button type="button" id="mob-cat-btn"
                class="w-full flex items-center justify-between px-4 py-3 rounded-xl border-2 border-gray-200 text-sm font-semibold text-gray-700">
            <span id="mob-cat-label">Product Categories</span>
            <svg id="mob-cat-arrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div id="mob-cat-drop" class="hidden mt-2 border border-gray-200 rounded-xl overflow-hidden shadow-lg">
            @foreach($navCategories as $idx => $cat)
            <button type="button"
                    data-mob-cat="{{ $idx }}"
                    class="mob-cat-item w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 hover:bg-brand-50 hover:text-brand-600 border-b border-gray-100 last:border-0 transition-colors">
                <span>{{ $cat['label'] }}</span>
                <svg class="w-3 h-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            {{-- Mobile sub-dropdown --}}
            <div id="mob-sub-{{ $idx }}" class="hidden bg-gray-50 border-t border-gray-200">

                @foreach($cat['subs'] as $sub)
                @php $isExternal = str_starts_with($sub['url'], 'http'); @endphp
                <a href="{{ $sub['url'] }}"
                   @if($isExternal) target="_blank" rel="noopener noreferrer" @endif
                   class="block px-6 py-2.5 text-sm text-gray-600 hover:text-brand-600 hover:bg-brand-50 border-b border-gray-100 last:border-0 transition-colors">
                    {{ $sub['label'] }}
                </a>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- DESKTOP: pill bar --}}
<div class="hidden md:block bg-white border-b border-gray-200">
    <div class="container-xl">
        <div class="flex items-stretch gap-2 py-3" id="cat-nav">
            @foreach($navCategories as $idx => $cat)
            @php
                $isActive = ($cat['id'] === $activeNav);
                $words = explode(' ', $cat['label']);
                $mid   = (int) ceil(count($words) / 2);
                $line1 = implode(' ', array_slice($words, 0, $mid));
                $line2 = implode(' ', array_slice($words, $mid));
            @endphp
            <a href="{{ $cat['url'] }}"
               data-cat-toggle="{{ $idx }}"
               class="cat-pill flex-1 flex flex-col items-center justify-center gap-0.5 px-2 py-2.5 rounded-xl text-xs font-semibold border-2 text-center leading-snug transition-all duration-200 select-none
                      {{ $isActive
                         ? 'border-brand-500 text-brand-600 bg-brand-50'
                         : 'border-gray-200 text-gray-700 bg-white hover:border-brand-400 hover:text-brand-600 hover:bg-gray-50' }}">
                <span class="whitespace-nowrap">{{ $line1 }}</span>
                @if($line2)
                <span class="whitespace-nowrap">{{ $line2 }}</span>
                @endif
                <svg data-pill-arrow
                     class="w-3 h-3 flex-shrink-0 transition-transform duration-200 mt-0.5"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
            @endforeach
        </div>
    </div>
</div>

{{-- Desktop dropdowns — fixed + JS-positioned --}}
@foreach($navCategories as $idx => $cat)
<div id="cat-drop-{{ $idx }}"
     class="cat-drop hidden fixed bg-white border border-gray-200 rounded-2xl shadow-2xl py-2 overflow-hidden"
     style="z-index:9999; top:-9999px; left:-9999px; width:max-content; min-width:180px; max-width:320px">
    @foreach($cat['subs'] as $sub)
    @php $isExternal = str_starts_with($sub['url'], 'http'); @endphp
    <a href="{{ $sub['url'] }}"
       @if($isExternal) target="_blank" rel="noopener noreferrer" @endif
       class="block px-5 py-2.5 text-sm text-gray-700 hover:text-brand-600 hover:bg-brand-50 transition-colors whitespace-nowrap">
        {{ $sub['label'] }}
    </a>
    @endforeach
</div>
@endforeach

@once
@push('scripts')
<script>
(function () {
    // ── Desktop pills ──
    var pills      = document.querySelectorAll('[data-cat-toggle]');
    var drops      = document.querySelectorAll('.cat-drop');
    var hideTimer  = null;
    var activeIdx  = null;

    function openDrop(btn) {
        var idx   = btn.getAttribute('data-cat-toggle');
        var drop  = document.getElementById('cat-drop-' + idx);
        var arrow = btn.querySelector('[data-pill-arrow]');
        if (activeIdx === idx) return;
        closeAll();
        activeIdx = idx;
        var r  = btn.getBoundingClientRect();
        drop.style.top  = (r.bottom + 6) + 'px';
        drop.style.left = r.left + 'px';
        drop.classList.remove('hidden');
        var dw = drop.offsetWidth;
        if (r.left + dw > window.innerWidth - 8) {
            drop.style.left = (window.innerWidth - dw - 8) + 'px';
        }
        arrow.classList.add('rotate-180');
        btn.classList.remove('border-gray-200', 'text-gray-700', 'hover:border-brand-400', 'hover:text-brand-600');
        btn.classList.add('border-brand-500', 'text-brand-600', 'bg-brand-50');
    }

    function closeAll() {
        drops.forEach(function (d) { d.classList.add('hidden'); d.style.top = '-9999px'; d.style.left = '-9999px'; });
        pills.forEach(function (b) {
            b.querySelector('[data-pill-arrow]').classList.remove('rotate-180');
            b.classList.remove('border-brand-500', 'text-brand-600', 'bg-brand-50');
            b.classList.add('border-gray-200', 'text-gray-700');
        });
        activeIdx = null;
    }

    function scheduleClose() { hideTimer = setTimeout(closeAll, 150); }
    function cancelClose()   { clearTimeout(hideTimer); }

    pills.forEach(function (btn) {
        btn.addEventListener('mouseenter', function () { cancelClose(); openDrop(btn); });
        btn.addEventListener('mouseleave', scheduleClose);
        btn.addEventListener('click', function (e) { e.stopPropagation(); });
    });

    drops.forEach(function (drop) {
        drop.addEventListener('mouseenter', cancelClose);
        drop.addEventListener('mouseleave', scheduleClose);
    });

    document.addEventListener('click', closeAll);
    document.addEventListener('scroll', closeAll, true);

    // ── Mobile dropdown ──
    var mobBtn   = document.getElementById('mob-cat-btn');
    var mobDrop  = document.getElementById('mob-cat-drop');
    var mobArrow = document.getElementById('mob-cat-arrow');

    if (mobBtn) {
        mobBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            var open = !mobDrop.classList.contains('hidden');
            mobDrop.classList.toggle('hidden', open);
            mobArrow.classList.toggle('rotate-180', !open);
        });
    }

    document.querySelectorAll('[data-mob-cat]').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var idx = btn.getAttribute('data-mob-cat');
            var sub = document.getElementById('mob-sub-' + idx);
            var isOpen = !sub.classList.contains('hidden');
            // close all subs
            document.querySelectorAll('[id^="mob-sub-"]').forEach(function (s) { s.classList.add('hidden'); });
            if (!isOpen) { sub.classList.remove('hidden'); }
        });
    });

    document.addEventListener('click', function () {
        if (mobDrop) mobDrop.classList.add('hidden');
        if (mobArrow) mobArrow.classList.remove('rotate-180');
    });
}());
</script>
@endpush
@endonce
