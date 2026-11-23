{{--
    Reusable "Search Products" accordion sidebar.
    Usage: @include('partials.products-sidebar', ['activeCategory' => 'media-converters'])
    Accepted $activeCategory values:
      'industrial-ethernet-switches' | 'media-converters' | 'industrial-pcs-displays'
      'protocol-converters' | 'profibus-profinet' | 'fiber-optics'
      'iot-gateways-routers' | 'diagnosis-network-audit' | 'plc-analyzer-software'
--}}
@php
$activeCategory = $activeCategory ?? '';

$categories = [
    [
        'id'     => 'industrial-ethernet-switches',
        'label'  => 'Industrial Ethernet Switches',
        'subs'   => [
            ['label' => 'DIN-rail Unmanaged Ethernet Switches',    'url' => 'https://bbcpl.in/unmanaged-ethernet-switches-supplier/'],
            ['label' => 'DIN-rail Managed Ethernet Switches',       'url' => 'https://bbcpl.in/rail-gigabit-managed-ethernet-switch-supplier/'],
            ['label' => 'Industrial Power Over Ethernet Switches',  'url' => 'https://bbcpl.in/industrial-power-over-ethernet-poe-switch-supplier/'],
            ['label' => 'EN50155 Ethernet Switches',               'url' => 'https://bbcpl.in/en50155-ethernet-switches-supplier/'],
            ['label' => 'Industrial Flat-type Ethernet Switches',   'url' => 'https://bbcpl.in/industrial-flat-type-ethernet-switch-supplier/'],
            ['label' => 'Rack-mount Ethernet Switches',             'url' => 'https://bbcpl.in/rack-mount-ethernet-switches-supplier/'],
            ['label' => 'SFP Transceiver',                         'url' => 'https://bbcpl.in/fibre-optics-solutions/sfp-transceiver/'],
            ['label' => 'Network Management System',                'url' => 'https://bbcpl.in/universal-network-management-system-software-lite/'],
            ['label' => 'IEC61850-3 Ethernet Switches',            'url' => 'https://bbcpl.in/iec61850-3-ethernet-switch/'],
            ['label' => 'TSN Ethernet Switches',                   'url' => 'https://bbcpl.in/tsn-ethernet-switch/'],
            ['label' => 'Renewable Energy Ethernet Switches',       'url' => 'https://bbcpl.in/renewable-energy-ethernet-switch/'],
            ['label' => 'Profinet Ethernet Switches',               'url' => 'https://bbcpl.in/profinet-ethernet-switch/'],
            ['label' => 'Industrial Optical Fiber Bypass Switches', 'url' => 'https://bbcpl.in/optical-fiber-bypass-switch/'],
            ['label' => 'E-mark Certified Ethernet Switches',       'url' => 'https://bbcpl.in/e-mark-certified-ethernet-switch/'],
            ['label' => 'HSR/PRP Ethernet Switches',                'url' => 'https://bbcpl.in/hsr-prp-ethernet-switch/'],
            ['label' => 'Nema TS2 Ethernet Switches',              'url' => 'https://bbcpl.in/nema-ts2-ethernet-switch/'],
            ['label' => 'ATEX Ethernet Switches',                   'url' => 'https://bbcpl.in/atex-ethernet-switches/'],
        ],
    ],
    [
        'id'     => 'media-converters',
        'label'  => 'Industrial Media Converter / Serial Device Servers',
        'subs'   => [
            ['label' => 'Serial to Fiber',        'url' => 'https://bbcpl.in/serial-connectivity/serial-to-fiber/'],
            ['label' => 'Ethernet to Fiber',      'url' => 'https://bbcpl.in/ethernet-to-fiber/'],
            ['label' => 'USB to Serial',          'url' => 'https://bbcpl.in/usb-to-serial'],
            ['label' => 'Serial to Ethernet',     'url' => 'https://bbcpl.in/serial-to-ethernet/'],
            ['label' => 'USB to Ethernet',        'url' => 'https://bbcpl.in/usb-to-ethernet/'],
            ['label' => 'Protector/Repeater/Hub', 'url' => 'https://bbcpl.in/protector-repeater-hub/'],
            ['label' => 'Can to Fiber',           'url' => 'https://bbcpl.in/can-to-fiber/'],
        ],
    ],
    [
        'id'     => 'industrial-pcs-displays',
        'label'  => 'Industrial PCs & Displays',
        'subs'   => [
            ['label' => 'Industrial PCs',       'url' => 'https://bbcpl.in/industrial-pcs/'],
            ['label' => 'Industrial Panel PCs', 'url' => 'https://bbcpl.in/industrial-panel-pcs/'],
            ['label' => 'Industrial Displays',  'url' => 'https://bbcpl.in/industrial-displays/'],
        ],
    ],
    [
        'id'     => 'protocol-converters',
        'label'  => 'Protocol Converters/Gateways',
        'subs'   => [
            ['label' => 'Planet',       'url' => 'https://bbcpl.in/protocol-converters-gateways/'],
            ['label' => 'Odot',         'url' => 'https://bbcpl.in/protocol-converters-gateways-odot/'],
            ['label' => 'Viltrus',      'url' => 'https://bbcpl.in/protocol-converters-gateways-viltrus/'],
            ['label' => '3Onedata',     'url' => 'https://bbcpl.in/protocol-converters-gateways-3onedata/'],
            ['label' => 'ADF Web',      'url' => 'https://bbcpl.in/protocol-converters-gateways-adfweb/'],
            ['label' => 'Authem',       'url' => 'https://bbcpl.in/protocol-converters-gateways-authem/'],
            ['label' => 'Data Loggers', 'url' => 'https://bbcpl.in/protocol-converters-gateways-data-loggers/'],
        ],
    ],
    [
        'id'     => 'profibus-profinet',
        'label'  => 'Profibus/Profinet Products & Accessories',
        'subs'   => [
            ['label' => 'Profibus Tester V5',      'url' => 'https://bbcpl.in/profibus-3/profibus-tester-v5/'],
            ['label' => 'Profibus Cable',           'url' => 'https://bbcpl.in/profibus-3/profibus-cable/profibus-dp-cable/'],
            ['label' => 'Profibus Connector',       'url' => 'https://bbcpl.in/profibus-3/profibus-connector/'],
            ['label' => 'Profinet Connector',       'url' => 'https://bbcpl.in/softlink-profinet-male-connector/'],
            ['label' => 'Profibus Stripping Tools', 'url' => 'https://bbcpl.in/profibus-profinet-stripping-tools/'],
            ['label' => 'Profinet Cable',           'url' => 'https://bbcpl.in/profinet-cable/'],
            ['label' => 'Profinet Tester',          'url' => 'https://bbcpl.in/profinet-tester/'],
            ['label' => 'Profinet Stripping Tools', 'url' => 'https://bbcpl.in/profibus-profinet-stripping-tools/'],
            ['label' => 'Profinet Patch Cord',      'url' => 'https://bbcpl.in/profinet-patch-cord/'],
        ],
    ],
    [
        'id'     => 'fiber-optics',
        'label'  => 'Fiber Optics/Network Products & Accessories',
        'subs'   => [
            ['label' => 'LIU',                    'url' => 'https://bbcpl.in/fibre-optics-solutions/liu-2/'],
            ['label' => 'Ethernet Patch Cord',    'url' => 'https://bbcpl.in/ethernet-patch-cord/'],
            ['label' => 'Single Mode Patch Cord', 'url' => 'https://bbcpl.in/fibre-optics-solutions/fo-patch-cords/'],
            ['label' => 'Multi Mode FO Patch Cord','url' => 'https://bbcpl.in/fibre-optics-solutions/fo-patch-cords/'],
            ['label' => 'Armored FO Patch Cord',  'url' => 'https://bbcpl.in/fibre-optics-solutions/fo-patch-cords/'],
            ['label' => 'Power Supply',           'url' => 'https://bbcpl.in/power-supply/'],
            ['label' => 'Rackmount LIU',          'url' => 'https://bbcpl.in/fibre-optics-solutions/liu-2/'],
        ],
    ],
    [
        'id'     => 'iot-gateways-routers',
        'label'  => 'Industrial IoT Gateways/Modems/Routers',
        'subs'   => [
            ['label' => 'Etic Telecom', 'url' => 'https://bbcpl.in/iot-gateways/iotrouterandgetways/'],
            ['label' => 'INSYS icom',   'url' => 'https://bbcpl.in/insys-icom/'],
            ['label' => 'Teltonika',    'url' => 'https://bbcpl.in/cellular-router-gateway/'],
        ],
    ],
    [
        'id'     => 'diagnosis-network-audit',
        'label'  => 'Diagnosis and Network Audit Services',
        'subs'   => [
            ['label' => 'Ethernet Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'Profibus Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'Profinet Diagnosis & Network Audit', 'url' => url('/contact-us')],
            ['label' => 'VPN Services',                       'url' => url('/contact-us')],
            ['label' => 'PLC Periodic Services',              'url' => url('/contact-us')],
        ],
    ],
    [
        'id'     => 'plc-analyzer-software',
        'label'  => 'PLC-Analyzer Software',
        'subs'   => [
            ['label' => 'Hardware', 'url' => 'https://www.autem.de/products/blackbox_e/'],
            ['label' => 'Software', 'url' => 'https://www.autem.de/products/plc-analyzer-pro-6/'],
        ],
    ],
];
@endphp

<aside class="hidden lg:block w-64 flex-shrink-0 sticky top-20">
    <div class="bg-brand-500 text-white text-sm font-semibold px-4 py-3 rounded-t-lg">
        Search Products
    </div>

    <nav class="products-sidebar-nav border border-t-0 border-gray-200 rounded-b-lg overflow-hidden divide-y divide-gray-100">
        @foreach($categories as $idx => $cat)
        @php $isActive = ($cat['id'] === $activeCategory); @endphp
        <div>
            <button type="button"
                    data-target="psub-{{ $idx }}"
                    class="sidebar-acc-btn w-full flex items-center justify-between gap-2 px-4 py-3 text-sm text-left transition-colors
                           {{ $isActive ? 'bg-brand-50 text-brand-600 font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-brand-500' }}">
                <span class="leading-snug">{{ $cat['label'] }}</span>
                <svg data-arrow class="w-3.5 h-3.5 flex-shrink-0 text-gray-400 transition-transform duration-200 {{ $isActive ? 'rotate-90' : '' }}"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <ul id="psub-{{ $idx }}"
                class="bg-gray-50 border-t border-gray-100 divide-y divide-gray-100 {{ $isActive ? '' : 'hidden' }}">
                @foreach($cat['subs'] as $sub)
                <li>
                    <a href="{{ $sub['url'] }}"
                       class="flex items-center gap-2 pl-6 pr-4 py-2.5 text-xs text-gray-600 hover:text-brand-500 hover:bg-brand-50 transition-colors">
                        <span class="w-1 h-1 rounded-full bg-brand-400 flex-shrink-0"></span>
                        {{ $sub['label'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </nav>
</aside>

@once
@push('scripts')
<script>
(function () {
    document.querySelectorAll('.sidebar-acc-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var targetId = btn.getAttribute('data-target');
            var submenu  = document.getElementById(targetId);
            var arrow    = btn.querySelector('[data-arrow]');
            var isOpen   = !submenu.classList.contains('hidden');

            var nav = btn.closest('.products-sidebar-nav');
            nav.querySelectorAll('[id^="psub-"]').forEach(function (el) { el.classList.add('hidden'); });
            nav.querySelectorAll('[data-arrow]').forEach(function (el) { el.classList.remove('rotate-90'); });
            nav.querySelectorAll('.sidebar-acc-btn').forEach(function (el) {
                el.classList.remove('bg-brand-50', 'text-brand-600', 'font-semibold');
                el.classList.add('text-gray-700');
            });

            if (!isOpen) {
                submenu.classList.remove('hidden');
                arrow.classList.add('rotate-90');
                btn.classList.add('bg-brand-50', 'text-brand-600', 'font-semibold');
                btn.classList.remove('text-gray-700');
            }
        });
    });
}());
</script>
@endpush
@endonce
