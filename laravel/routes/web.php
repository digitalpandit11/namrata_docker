<?php

use App\Http\Controllers\EnquireController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WordPressImportController;
use App\Mail\ContactFormMail;
use App\Mail\EnquireFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/partners', function () {
    return view('pages.partners');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/privacy-policy-2', function () {
    return view('pages.privacy-policy');
});

Route::get('/jobs', function () {
    return view('pages.career');
});

Route::get('/jobs/regional-sales-engineer', function () {
    return view('pages.jobs.regional-sales-engineer');
});

Route::get('/jobs/hardware-testing-engineer', function () {
    return view('pages.jobs.hardware-testing-engineer');
});

Route::get('/jobs/technical-support-engineer', function () {
    return view('pages.jobs.technical-support-engineer');
});

Route::get('/jobs/proposal-engineer', function () {
    return view('pages.jobs.proposal-engineer');
});

Route::post('/jobs/apply', [JobApplicationController::class, 'submit']);

// ── Contact ──────────────────────────────────────────────────────────────────
Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::post('/contact-us', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name'                 => ['required', 'string', 'max:100', 'regex:/^[\pL\s\'\-]+$/u'],
        'email'                => 'required|email|max:100',
        'message'              => 'required|string|max:1000',
        'phone'                => 'nullable|digits:10',
        'subject'              => 'nullable|string|max:150',
        'g-recaptcha-response' => 'required|captcha',
    ]);

    Mail::to('backoffice@bbcpl.in')
        ->cc(['sales@bbcpl.in', 'support@vbtek.in', 'atul@vbtek.in', 'support@bbcpl.in'])
        ->send(new ContactFormMail(
            senderName:  (string) $request->name,
            senderEmail: (string) $request->email,
            phone:       (string) ($request->input('phone') ?? ''),
            formSubject: (string) ($request->input('subject') ?? ''),
            userMessage: (string) $request->message,
            pageUrl:     url('/contact-us'),
        ));

    return redirect('/thank-you');
});

// ── Enquire Now ──────────────────────────────────────────────────────────────
Route::post('/enquire-now', [EnquireController::class, 'submit']);
Route::get('/thank-you', function () {
    return view('pages.thankyou');
});

// ── Product pages ────────────────────────────────────────────────────────────
Route::get('/industrial-ethernet-switches-supplier', function () {
    return view('pages.products.industrial-ethernet-switches');
});

Route::get('/industrial-media-converter-serial-device-servers', function () {
    return view('pages.products.media-converters');
});

// ── Industrial Media Converter / Serial Device Servers sub-categories ─────────
Route::get('/serial-connectivity/serial-to-fiber', function () {
    return view('pages.products.serial-to-fiber');
});

Route::get('/serial-to-fiber-planet', function () {
    return view('pages.products.serial-to-fiber-planet');
});

Route::get('/serial-to-fiber-3onedata', function () {
    return view('pages.products.serial-to-fiber-3onedata');
});

Route::get('/serial-to-fiber-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/15');
});

Route::get('/ethernet-to-fiber', function () {
    return view('pages.products.ethernet-to-fiber');
});

Route::get('/ethernet-to-fiber-planet', function () {
    return view('pages.products.ethernet-to-fiber-planet');
});

Route::get('/ethernet-to-fiber-3onedata', function () {
    return view('pages.products.ethernet-to-fiber-3onedata');
});

Route::get('/ethernet-to-fiber-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/67');
});

Route::get('/usb-to-serial', function () {
    return view('pages.products.usb-to-serial');
});

Route::get('/usb-to-serial-3onedata', function () {
    return view('pages.products.usb-to-serial-3onedata');
});

Route::get('/usb-to-serial-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/17');
});

Route::get('/can-to-fiber', function () {
    return view('pages.products.can-to-fiber');
});

Route::get('/can-to-fiber-3onedata', function () {
    return view('pages.products.can-to-fiber-3onedata');
});

Route::get('/serial-to-ethernet', function () {
    return view('pages.products.serial-to-ethernet');
});

Route::get('/serial-to-ethernet-planet', function () {
    return view('pages.products.serial-to-ethernet-planet');
});

Route::get('/serial-to-ethernet-3onedata', function () {
    return view('pages.products.serial-to-ethernet-3onedata');
});

Route::get('/serial-to-ethernet-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/12');
});

Route::get('/usb-to-ethernet', function () {
    return view('pages.products.usb-to-ethernet');
});

Route::get('/usb-to-ethernet-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/19');
});

Route::get('/protector-repeater-hub', function () {
    return view('pages.products.protector-repeater-hub');
});

Route::get('/protector-repeater-hub-3onedata', function () {
    return view('pages.products.protector-repeater-hub-3onedata');
});

Route::get('/industrial-pcs-displays', function () {
    return view('pages.products.industrial-pcs-displays');
});

Route::get('/industrial-pcs', function () {
    return view('pages.products.industrial-pcs');
});

Route::get('/industrial-pcs-portwell', function () {
    return view('pages.products.industrial-pcs-portwell');
});

Route::get('/industrial-panel-pcs', function () {
    return view('pages.products.industrial-panel-pcs');
});

Route::get('/industrial-panel-pcs-portwell', function () {
    return view('pages.products.industrial-panel-pcs-portwell');
});

Route::get('/industrial-displays', function () {
    return view('pages.products.industrial-displays');
});

Route::get('/industrial-displays-portwell', function () {
    return view('pages.products.industrial-displays-portwell');
});

Route::get('/protocol-converters-gateways', function () {
    return view('pages.products.protocol-converters-gateways');
});

Route::get('/protocol-converters-gateways-planet', function () {
    return view('pages.products.protocol-converters-gateways-planet');
});

Route::get('/protocol-converters-gateways-odot', function () {
    return view('pages.products.protocol-converters-gateways-odot');
});

Route::get('/protocol-converters-gateways-viltrus', function () {
    return view('pages.products.protocol-converters-gateways-viltrus');
});

Route::get('/protocol-converters-gateways-3onedata', function () {
    return view('pages.products.protocol-converters-gateways-3onedata');
});

Route::get('/protocol-converters-gateways-adfweb', function () {
    return view('pages.products.protocol-converters-gateways-adfweb');
});

Route::get('/protocol-converters-gateways-authem', function () {
    return view('pages.products.protocol-converters-gateways-authem');
});

Route::get('/protocol-converters-gateways-data-loggers', function () {
    return view('pages.products.protocol-converters-gateways-data-loggers');
});

Route::get('/profibus-profinet-products-accessories', function () {
    return view('pages.products.profibus-profinet-products');
});

Route::get('/profibus-3/profibus-tester-v5', function () {
    return view('pages.products.profibus-tester-v5');
});

Route::get('/profibus-3/profibus-cable/profibus-dp-cable', function () {
    return view('pages.products.profibus-dp-cable');
});

Route::get('/profibus-3/profibus-connector', function () {
    return view('pages.products.profibus-connector');
});

Route::get('/softlink-profinet-male-connector', function () {
    return view('pages.products.softlink-profinet-connector');
});

Route::get('/profibus-profinet-stripping-tools', function () {
    return view('pages.products.profibus-profinet-stripping-tools');
});

Route::get('/profinet-cable', function () {
    return view('pages.products.profinet-cable');
});

Route::get('/profinet-tester', function () {
    return view('pages.products.profinet-tester');
});

Route::get('/profinet-patch-cord', function () {
    return view('pages.products.profinet-patch-cord');
});

Route::get('/fiber-optics-network-products-accessories', function () {
    return view('pages.products.fiber-optics-network-products');
});

Route::get('/fibre-optics-solutions/fo-patch-cords', function () {
    return view('pages.products.fo-patch-cords');
});

Route::get('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord', function () {
    return view('pages.products.fo-patch-cord');
});

Route::get('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord/patch-cord-sc-sc-duplex-5-mtrs-singlemode', function () {
    return view('pages.products.patch-cord-sc-sc-singlemode');
});

Route::get('/fibre-optics-solutions/fo-patch-cords/fo-patch-cord/patch-cord-sc-sc-duplex-5-mtrs-multimode', function () {
    return view('pages.products.patch-cord-sc-sc-multimode');
});

Route::get('/fibre-optics-solutions/liu-2', function () {
    return view('pages.products.liu');
});

Route::get('/fibre-optics-solutions/liu-2/6-port-fully-loaded-liu', function () {
    return view('pages.products.6-port-fully-loaded-liu');
});

Route::get('/fibre-optics-solutions/liu-2/6-port-fully-loaded-liu/6-port-fully-loaded-liu-sc-single-mode-din-rail', function () {
    return view('pages.products.6-port-fully-loaded-liu-sc-single-mode-din-rail');
});

Route::get('/fibre-optics-solutions/liu-2/6-port-fully-loaded-liu/6-port-fully-loaded-liu-sc-multi-mode-din-rail', function () {
    return view('pages.products.6-port-fully-loaded-liu-sc-multi-mode-din-rail');
});

Route::get('/fibre-optics-solutions/liu-2/12-port-fully-loaded-liu', function () {
    return view('pages.products.12-port-fully-loaded-liu');
});

Route::get('/fibre-optics-solutions/liu-2/12-port-fully-loaded-liu/12-port-fully-loaded-liu-sc-single-mode-din-rail', function () {
    return view('pages.products.12-port-fully-loaded-liu-sc-single-mode-din-rail');
});

Route::get('/fibre-optics-solutions/liu-2/12-port-fully-loaded-liu/12-port-fully-loaded-liu-sc-multi-mode-din-rail', function () {
    return view('pages.products.12-port-fully-loaded-liu-sc-multi-mode-din-rail');
});

Route::get('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu', function () {
    return view('pages.products.24-port-fully-loaded-liu');
});

Route::get('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu/24-port-fully-loaded-liu-sc-single-mode-wall-mount', function () {
    return view('pages.products.24-port-fully-loaded-liu-sc-single-mode-wall-mount');
});

Route::get('/fibre-optics-solutions/liu-2/24-port-fully-loaded-liu/24-port-fully-loaded-liu_sc-multi-mode-wall-mount', function () {
    return view('pages.products.24-port-fully-loaded-liu-sc-multi-mode-wall-mount');
});

Route::get('/iot-gateways', function () {
    return view('pages.products.iot-gateways-routers');
});

Route::get('/iot-gateways/iotrouterandgetways', function () {
    return view('pages.products.etic-telecom-iot-gateways');
});

Route::get('/cellular-router-gateway', function () {
    return view('pages.products.teltonika-gateways');
});

Route::get('/diagnosis-and-network-audit-services', function () {
    return view('pages.products.diagnosis-network-audit');
});

Route::get('/plc-analyzer-software', function () {
    return view('pages.products.plc-analyzer-software');
});

// ── Product enquiry form handler ─────────────────────────────────────────────
Route::post('/product-enquiry', function (\Illuminate\Http\Request $request) {
    // TODO: wire up email (Mail::to('sales@bbcpl.in')->send(...))
    return redirect()->back()->with('enquiry_success', 'Thank you! Our team will contact you within 24 hours.');
});

// ── Managed Ethernet Switches ─────────────────────────────────────────────────
Route::get('/rail-gigabit-managed-ethernet-switch-supplier', function () {
    return view('pages.products.managed-ethernet-switches');
});

Route::get('/din-rail-managed-ethernet-switches/planet', function () {
    return view('pages.products.planet-managed-switches');
});

Route::get('/din-rail-managed-ethernet-switches/3onedata', function () {
    return view('pages.products.3onedata-managed-switches');
});

// ── Industrial PoE Switches ───────────────────────────────────────────────────
Route::get('/industrial-power-over-ethernet-poe-switch-supplier', function () {
    return view('pages.products.industrial-poe-switches');
});

Route::get('/industrial-power-over-ethernet-planet', function () {
    return view('pages.products.planet-poe-switches');
});

Route::get('/industrial-poe-switches-supplier-antaira', function () {
    return view('pages.products.antaira-poe-switches');
});

Route::get('/industrial-power-over-ethernet-switch-3onedata', function () {
    return view('pages.products.3onedata-poe-switches');
});

// ── Industrial Ethernet Switch sub-category pages ────────────────────────────
// ── EN50155 Ethernet Switches ─────────────────────────────────────────────────
Route::get('/en50155-ethernet-switches-supplier', function () {
    return view('pages.products.en50155-ethernet-switches');
});

Route::get('/en50155-ethernet-switches-supplier-planet', function () {
    return view('pages.products.planet-en50155-switches');
});

Route::get('/en50155-ethernet-switches-supplier-3onedata', function () {
    return view('pages.products.3onedata-en50155-switches');
});

Route::get('/en50155-ethernet-switches-supplier-kyland', function () {
    return view('pages.products.kyland-en50155-switches');
});

// ── Industrial Flat-type Ethernet Switch pages ────────────────────────────────
Route::get('/industrial-flat-type-ethernet-switch-supplier', function () {
    return view('pages.products.industrial-flat-type-ethernet-switches');
});

Route::get('/industrial-flat-type-ethernet-switch-planet', function () {
    return view('pages.products.planet-flat-type-switches');
});

// ── Rack-mount Ethernet Switch pages ─────────────────────────────────────────
Route::get('/rack-mount-ethernet-switches-supplier', function () {
    return view('pages.products.rack-mount-ethernet-switches');
});

Route::get('/rack-mount-ethernet-switch-planet', function () {
    return view('pages.products.rack-mount-ethernet-switch-planet');
});

Route::get('/rack-mount-ethernet-switch-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/Apply/28');
});

Route::get('/rack-mount-ethernet-switch-3onedata', function () {
    return view('pages.products.rack-mount-ethernet-switch-3onedata');
});

// ── SFP Transceiver pages ─────────────────────────────────────────────────────
Route::get('/fibre-optics-solutions/sfp-transceiver', function () {
    return view('pages.products.sfp-transceiver');
});

Route::get('/sfp-transceiver-planet', function () {
    return view('pages.products.sfp-transceiver-planet');
});

Route::get('/sfp-transceiver-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Category/7');
});

Route::get('/sfp-transceiver-etherwan', function () {
    return redirect()->away('https://www.etherwan.com/products/accessories/sfp-modules');
});

Route::get('/sfp-transceiver-kyland', function () {
    return view('pages.products.sfp-transceiver-kyland');
});

// ── Network Management System pages ──────────────────────────────────────────
Route::get('/universal-network-management-system-software-lite', function () {
    return view('pages.products.network-management-system');
});

Route::get('/network-management-system-planet', function () {
    return view('pages.products.network-management-system-planet');
});

Route::get('/network-management-system-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/79');
});

Route::get('/network-management-system-etherwan', function () {
    return redirect()->away('https://www.etherwan.com/products/network-management-software');
});

Route::get('/network-management-system-kyland', function () {
    return view('pages.products.network-management-system-kyland');
});

Route::get('/network-management-system-3onedata', function () {
    return view('pages.products.network-management-system-3onedata');
});

// ── IEC61850-3 Ethernet Switch pages ─────────────────────────────────────────
Route::get('/iec61850-3-ethernet-switch', function () {
    return view('pages.products.iec61850-3-ethernet-switches');
});

Route::get('/iec61850-3-ethernet-switch-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/Apply/41');
});

Route::get('/iec61850-3-ethernet-switch-etherwan', function () {
    return redirect()->away('https://www.etherwan.com/products/iec-61850-3ieee-1613-switches');
});

Route::get('/iec61850-3-ethernet-switch-kyland', function () {
    return view('pages.products.iec61850-3-ethernet-switch-kyland');
});

Route::get('/iec61850-3-ethernet-switch-3onedata', function () {
    return view('pages.products.iec61850-3-ethernet-switch-3onedata');
});

// ── TSN Ethernet Switch pages ─────────────────────────────────────────────────
Route::get('/tsn-ethernet-switch', function () {
    return view('pages.products.tsn-ethernet-switches');
});

Route::get('/tsn-ethernet-switch-planet', function () {
    return view('pages.products.tsn-ethernet-switch-planet');
});

Route::get('/tsn-ethernet-switch-kyland', function () {
    return view('pages.products.tsn-ethernet-switch-kyland');
});

Route::get('/tsn-ethernet-switch-3onedata', function () {
    return view('pages.products.tsn-ethernet-switch-3onedata');
});

// ── Renewable Energy Ethernet Switch pages ────────────────────────────────────
Route::get('/renewable-energy-ethernet-switch', function () {
    return view('pages.products.renewable-energy-ethernet-switches');
});

Route::get('/renewable-energy-ethernet-switch-planet', function () {
    return view('pages.products.renewable-energy-ethernet-switch-planet');
});

// ── Profinet Ethernet Switch pages ───────────────────────────────────────────
Route::get('/profinet-ethernet-switch', function () {
    return view('pages.products.profinet-ethernet-switches');
});

Route::get('/profinet-ethernet-switch-planet', function () {
    return view('pages.products.profinet-ethernet-switch-planet');
});

Route::get('/profinet-ethernet-switch-kyland', function () {
    return view('pages.products.profinet-ethernet-switch-kyland');
});

Route::get('/profinet-ethernet-switch-3onedata', function () {
    return view('pages.products.profinet-ethernet-switch-3onedata');
});

// ── Optical Fiber Bypass Switch pages ────────────────────────────────────────
Route::get('/optical-fiber-bypass-switch', function () {
    return view('pages.products.optical-fiber-bypass-switches');
});

Route::get('/industrial-optical-fiber-bypass-switch-planet', function () {
    return view('pages.products.industrial-optical-fiber-bypass-switch-planet');
});

Route::get('/industrial-optical-fiber-bypass-switch-3onedata', function () {
    return view('pages.products.industrial-optical-fiber-bypass-switch-3onedata');
});

// ── E-mark Certified Ethernet Switch pages ───────────────────────────────────
Route::get('/e-mark-certified-ethernet-switch', function () {
    return view('pages.products.e-mark-certified-ethernet-switches');
});

Route::get('/e-mark-certified-ethernet-switch-planet', function () {
    return view('pages.products.e-mark-certified-ethernet-switch-planet');
});

Route::get('/e-mark-certified-ethernet-switch-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/Apply/37');
});

// ── HSR/PRP Ethernet Switch pages ────────────────────────────────────────────
Route::get('/hsr-prp-ethernet-switch', function () {
    return view('pages.products.hsr-prp-ethernet-switches');
});

Route::get('/hsr-prp-ethernet-switch-kyland', function () {
    return view('pages.products.hsr-prp-ethernet-switch-kyland');
});

Route::get('/hsr-prp-ethernet-switch-3onedata', function () {
    return view('pages.products.hsr-prp-ethernet-switch-3onedata');
});

// ── NEMA TS2 Ethernet Switch pages ───────────────────────────────────────────
Route::get('/nema-ts2-ethernet-switch', function () {
    return view('pages.products.nema-ts2-ethernet-switches');
});

Route::get('/nema-ts2-ethernet-switch-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/Apply/43');
});

Route::get('/nema-ts2-ethernet-switch-kyland', function () {
    return view('pages.products.nema-ts2-ethernet-switch-kyland');
});

// ── ATEX Ethernet Switch pages ────────────────────────────────────────────────
Route::get('/atex-ethernet-switches', function () {
    return view('pages.products.atex-ethernet-switches');
});

Route::get('/atex-ethernet-switches-antaira', function () {
    return redirect()->away('https://www.antaira.com.tw/Products/Apply/44');
});

Route::get('/atex-ethernet-switches-kyland', function () {
    return view('pages.products.atex-ethernet-switches-kyland');
});

// ── Planet brand page ────────────────────────────────────────────────────────
Route::get('/planet', function () {
    return view('pages.products.planet');
});


// ── Unmanaged Ethernet Switches — sub-category + type + detail ───────────────
Route::get('/unmanaged-ethernet-switches-supplier', function () {
    return view('pages.products.unmanaged-ethernet-switches');
});

Route::get('/unmanaged-ethernet-switches-supplier/{typeSlug}', function (string $typeSlug) {
    $subcategory = config('products.unmanaged-ethernet-switches');
    $type = $subcategory['types'][$typeSlug] ?? null;
    abort_if(!$type, 404);
    return view('pages.products.product-type', compact('subcategory', 'typeSlug', 'type'));
});

Route::get('/unmanaged-ethernet-switches-supplier/gigabit-ethernet-switch/3onedata', function () {
    return view('pages.products.3onedata-unmanaged-switches');
});

Route::get('/unmanaged-ethernet-switches-supplier/{typeSlug}/{productSlug}', function (string $typeSlug, string $productSlug) {
    $subcategory = config('products.unmanaged-ethernet-switches');
    $type        = $subcategory['types'][$typeSlug] ?? null;
    abort_if(!$type, 404);
    $product = $type['products'][$productSlug] ?? null;
    abort_if(!$product, 404);
    return view('pages.products.product-detail', compact('subcategory', 'typeSlug', 'type', 'productSlug', 'product'));
});

// ── WordPress Import (run once, then remove or protect) ──────────────────────
Route::get('/wp-import',   [WordPressImportController::class, 'import']);   // first-time import (skips existing)
Route::get('/wp-reimport', [WordPressImportController::class, 'reimport']); // update all existing posts

// ── News / Blog ──────────────────────────────────────────────────────────────
Route::get('/blog',        [PostController::class, 'index']);
Route::get('/blog/{slug}', [PostController::class, 'show']);
