@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'BluBoxx Communication Pvt. Ltd. — Founded in 2016 in Pune. Authorized industrial networking distributor. ISO 9001-2015 Certified. We help you connect.')

@section('content')

{{-- HERO --}}
<section class="bg-gray-50 border-b border-gray-200 py-14">
    <div class="container-xl">
        <nav class="flex items-center gap-2 text-sm text-gray-400 mb-6">
            <a href="{{ url('/') }}" class="hover:text-brand-500 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-brand-500">About Us</span>
        </nav>
        <p class="section-subtitle">Est. 2016 · Pune, India</p>
        <h1 class="text-4xl md:text-5xl font-bold text-dark mb-4">"We Help You Connect"</h1>
        <p class="text-gray-500 max-w-2xl text-lg">Partnering with customers to achieve higher productivity through the latest technologically optimized networking solutions.</p>
    </div>
</section>

{{-- STATS STRIP --}}
<div class="bg-brand-500">
    <div class="container-xl">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-white/20 text-white text-center">
            <div class="py-5"><div class="text-2xl font-bold">2016</div><div class="text-xs text-brand-100 font-medium mt-0.5">Founded</div></div>
            <div class="py-5"><div class="text-2xl font-bold">10+</div><div class="text-xs text-brand-100 font-medium mt-0.5">Years Experience</div></div>
            <div class="py-5"><div class="text-2xl font-bold">500+</div><div class="text-xs text-brand-100 font-medium mt-0.5">Products</div></div>
            <div class="py-5"><div class="text-2xl font-bold">PAN India</div><div class="text-xs text-brand-100 font-medium mt-0.5">Coverage</div></div>
        </div>
    </div>
</div>

{{-- CORE PURPOSE + VALUES --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: We Help You Connect image --}}
            <div class="relative">
                    <img src="{{ asset('images/about_us/about-connect.jpg') }}" alt="We Help You Connect" class="w-full rounded-2xl shadow-xl">
                {{-- ISO badge --}}
                <div class="absolute -bottom-4 -right-4 bg-white rounded-xl shadow-lg px-4 py-3 flex items-center gap-2 border border-gray-100">
                    <svg class="w-5 h-5 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-xs font-bold text-dark">ISO 9001-2015 Certified</span>
                </div>
            </div>

            {{-- Right: Core Purpose + Core Values --}}
            <div>
                {{-- Core Purpose --}}
                <div class="mb-10">
                    <p class="section-subtitle">Our Mission</p>
                    <h2 class="text-3xl font-bold text-dark mb-4">Core Purpose</h2>
                    <p class="text-gray-600 text-lg leading-relaxed border-l-4 border-brand-500 pl-4">
                        To Partner With Customers In Achieving Higher Productivity By Providing Latest Technologically, Optimized Solutions.
                    </p>
                </div>

                {{-- Core Values --}}
                <div>
                    <h3 class="text-xl font-bold text-dark mb-6">Core Values</h3>
                    <div class="space-y-5">

                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0 group-hover:bg-brand-500 transition-colors">
                                <svg class="w-5 h-5 text-brand-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-1">We Deliver What We Commit</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">We stand true to our word, we will do all we can to fulfill our commitments. It can be any commitment made by us towards our customers, suppliers, deliveries, payments, support etc.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0 group-hover:bg-brand-500 transition-colors">
                                <svg class="w-5 h-5 text-brand-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-1">Optimized Solutions</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">We will choose, find or design the best offerings for our customers. We will give the most techno-commercially optimized solution. We shall never suggest nor propose a wrong thing.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0 group-hover:bg-brand-500 transition-colors">
                                <svg class="w-5 h-5 text-brand-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-1">Open Communication</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">We believe in open communication between all employees & management at all levels. Everyone is free to voice their opinions and suggestions.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center shrink-0 group-hover:bg-brand-500 transition-colors">
                                <svg class="w-5 h-5 text-brand-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-1">Keep Exploring, Keep Upgrading</h4>
                                <p class="text-sm text-gray-500 leading-relaxed">We will look for new opportunities, new technologies, new markets, new offerings and adopt ourselves to it. So we will keep upgrading not only ourselves but also our offerings to the customers.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- OUR JOURNEY --}}
<section class="py-20 bg-gray-50">
    <div class="container-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Journey text --}}
            <div>
                <p class="section-subtitle">How We Started</p>
                <h2 class="section-title">Our Journey</h2>

                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>It all started in <strong class="text-dark">2016</strong> when two friends spotted a gap in the market of Good Expertise Networking Solutions.</p>
                    <p>They grabbed the opportunity and started BluBoxx with a purpose to provide optimised and latest solutions to the clients which will help them increase their productivity.</p>
                    <p>In the beginning, BluBoxx was selling Ethernet Switches and in a short span of time they added products to their basket from renowned global brands. Today company sells <strong class="text-brand-600">Ethernet Switches, Serial Devices, Servers, FO Solutions, IoT Routers</strong> and the list goes on and on.</p>
                    <p>Driven by its purpose, BluBoxx strongly believes in consistently adding & upgrading their offering and solutions to meet and exceed ever increasing client needs.</p>
                </div>

                {{-- Timeline milestones --}}
                <div class="mt-8 space-y-4">
                    @foreach([
                        ['year' => '2016', 'text' => 'Founded in Pune — started with Industrial Ethernet Switches'],
                        ['year' => '2018', 'text' => 'Expanded product portfolio with global brand partnerships'],
                        ['year' => '2019', 'text' => 'Represented India at Hannover Messe — industrie 4.0'],
                        ['year' => '2021', 'text' => 'ISO 9001-2015 Certified — PAN India operations'],
                        ['year' => '2024', 'text' => '500+ products, 12+ brand partners, serving top industries'],
                    ] as $milestone)
                    <div class="flex items-start gap-4">
                        <div class="w-14 shrink-0 text-center">
                            <span class="text-xs font-bold text-brand-500 bg-brand-50 px-2 py-1 rounded-full">{{ $milestone['year'] }}</span>
                        </div>
                        <div class="flex-1 pt-0.5">
                            <div class="w-2 h-2 rounded-full bg-brand-500 inline-block mr-2 -mt-0.5"></div>
                            <span class="text-sm text-gray-600">{{ $milestone['text'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Founders photo --}}
            <div class="relative">
                    <img src="{{ asset('images/about_us/about-founders.png') }}" alt="BluBoxx Founders at Hannover Messe 2019" class="w-full rounded-2xl shadow-xl">
                <div class="absolute bottom-4 left-4 bg-dark/80 backdrop-blur-sm text-white text-xs font-semibold px-3 py-2 rounded-lg">
                    #hannovermesse2019 · industrie4.0
                </div>
            </div>

        </div>
    </div>
</section>

{{-- WHY BLUBOXX --}}
<section class="py-20 bg-white">
    <div class="container-xl">
        <div class="text-center mb-14">
            <p class="section-subtitle">Why Choose Us</p>
            <h2 class="section-title">Why BluBoxx?</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => '🏭', 'title' => 'Industrial Grade',      'desc' => 'Products built for harsh factory environments — extreme temperatures, vibration, EMI resistance.'],
                ['icon' => '🤝', 'title' => 'Authorized Distributor', 'desc' => 'Official authorization certificates from all major brand partners for India.'],
                ['icon' => '⚙️',  'title' => 'Technical Support',     'desc' => 'Diagnosis, network audit and after-sales support by trained engineers.'],
                ['icon' => '🚀', 'title' => 'Fast Delivery',          'desc' => 'PAN India logistics with stock maintained locally for quick turnaround.'],
            ] as $why)
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-md hover:bg-brand-50 transition-all group">
                <div class="text-4xl mb-4">{{ $why['icon'] }}</div>
                <h3 class="font-semibold text-dark mb-2 group-hover:text-brand-600 transition-colors">{{ $why['title'] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $why['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
