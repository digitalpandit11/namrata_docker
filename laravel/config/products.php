<?php

/*
|--------------------------------------------------------------------------
| Product Catalog
|--------------------------------------------------------------------------
| Nested: subcategory-slug → types → products
| iframe_url = manufacturer's product page (embedded in the detail view)
*/

return [

    'unmanaged-ethernet-switches' => [
        'label'        => 'DIN-rail Unmanaged Ethernet Switches',
        'description'  => 'Rugged DIN-rail unmanaged industrial ethernet switches for harsh factory environments.',
        'parent_url'   => '/industrial-ethernet-switches-supplier',
        'parent_label' => 'Industrial Ethernet Switches',
        'seo_cities'   => ['Pune','Mumbai','Bangalore','Hyderabad','Chennai','Delhi','Noida','Kolkata','Ahmedabad','Surat','Indore','Nashik','Nagpur'],
        'types'        => [

            'gigabit-ethernet-switch' => [
                'label'       => 'Gigabit Ethernet Switch',
                'description' => '10/100/1000T industrial gigabit unmanaged switches for high-speed factory networks.',
                'iframe_url'  => 'https://www.planet.com.tw/en/products/industrial-ethernet/din-rail-unmanaged-ethernet-switches/din-rail-unmanaged-gigabit-ethernet-switch',
                'products'    => [
                    'igs-501t' => [
                        'name'        => 'IGS-501T',
                        'full_name'   => '5-Port 10/100/1000T Industrial Gigabit Ethernet Switch',
                        'brand'       => 'Planet',
                        'iframe_url'  => 'https://www.planet.com.tw/en/product/igs-501t',
                        'img'         => 'igs-501t.jpg',
                        'specs'       => ['Ports' => '5 × RJ45 GbE', 'Temp' => '-10~60°C', 'Mounting' => 'DIN-rail', 'Power' => '12~48V DC'],
                        'tags'        => ['DIN-rail', 'Gigabit', '5-Port', 'Unmanaged'],
                        'seo_desc'    => '5-port industrial gigabit ethernet switch for factory automation and building automation applications.',
                    ],
                    'igs-801t' => [
                        'name'        => 'IGS-801T',
                        'full_name'   => '8-Port 10/100/1000T Industrial Gigabit Ethernet Switch',
                        'brand'       => 'Planet',
                        'iframe_url'  => 'https://www.planet.com.tw/en/product/igs-801t',
                        'img'         => 'igs-801t.jpg',
                        'specs'       => ['Ports' => '8 × RJ45 GbE', 'Temp' => '-10~60°C', 'Mounting' => 'DIN-rail', 'Power' => '12~48V DC'],
                        'tags'        => ['DIN-rail', 'Gigabit', '8-Port', 'Unmanaged'],
                        'seo_desc'    => '8-port industrial gigabit ethernet switch for demanding industrial automation environments.',
                    ],
                    'igs-620tf' => [
                        'name'        => 'IGS-620TF',
                        'full_name'   => 'Industrial 4-Port 10/100/1000T + 2-Port 100/1000X SFP Ethernet Switch',
                        'brand'       => 'Planet',
                        'iframe_url'  => 'https://www.planet.com.tw/en/product/igs-620tf',
                        'img'         => 'igs-620tf.jpg',
                        'specs'       => ['Copper' => '4 × RJ45 GbE', 'Fiber' => '2 × SFP', 'Temp' => '-10~60°C', 'Mounting' => 'DIN-rail'],
                        'tags'        => ['DIN-rail', 'Gigabit', 'SFP', 'Fiber', 'Combo', 'Unmanaged'],
                        'seo_desc'    => 'Industrial gigabit combo switch with copper and SFP fiber ports for mixed media networks.',
                    ],
                ],
            ],

            'fast-ethernet-switch' => [
                'label'       => 'Fast Ethernet Switch',
                'description' => '10/100T industrial fast ethernet unmanaged switches for cost-effective automation networks.',
                'iframe_url'  => 'https://www.planet.com.tw/en/products/industrial-ethernet/din-rail-unmanaged-ethernet-switches/din-rail-unmanaged-fast-ethernet-switch',
                'products'    => [],
            ],

            'combo-switch' => [
                'label'       => 'Combo Switch',
                'description' => 'Industrial combo switches with mixed copper and fiber ports for extended reach.',
                'products'    => [],
            ],

        ],
    ],

];
