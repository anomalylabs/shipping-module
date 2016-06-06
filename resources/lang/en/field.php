<?php

return [
    'name'        => [
        'name'         => 'Name',
        'label'        => [
            'rates' => 'Service Name'
        ],
        'instructions' => [
            'rates' => 'This will be the displayed name at checkout.'
        ]
    ],
    'description' => [
        'name' => 'Description'
    ],
    'country'     => [
        'name' => 'Country'
    ],
    'states'      => [
        'name' => 'States'
    ],
    'zone'        => [
        'name'         => 'Zone',
        'label'        => 'Shipping Zone',
        'instructions' => 'Specify the shipping zone this rate applies to.'
    ],
    'rate'        => [
        'name'         => 'Shipping Rate',
        'instructions' => 'Specify how this shipping rate is applied.',
        'option'       => [
            'price'  => 'Rate is based on price.',
            'weight' => 'Rate is based on weight.',
        ]
    ],
    'condition'   => [
        'name' => 'Condition',
    ],
    'min_unit'    => [
        'name'         => 'Minimum Price/Weight',
        'instructions' => 'Specify the minimum applicable price or weight for this shipping rate.',
    ],
    'max_unit'    => [
        'name'         => 'Maximum Price/Weight',
        'instructions' => 'Specify the maximum applicable price or weight for this shipping rate.',
    ],
    'price'       => [
        'name'         => 'Shipping Cost',
        'instructions' => 'Specify the shipping cost.',
    ],
    'carrier'     => [
        'name' => 'Carrier',
    ],
    'height'      => [
        'name' => 'Height',
    ],
    'width'       => [
        'name' => 'Width',
    ],
    'length'      => [
        'name' => 'Length',
    ],
    'type'        => [
        'name'         => 'Package Type',
        'instructions' => 'Specify how this shipping rate is calculated.',
        'option'       => [
            'package'  => 'Package',
            'envelope' => 'Envelope',
        ]
    ],
    'default'     => [
        'name'         => 'Default Package',
        'instructions' => 'This package size will be used to calculate shipping rates at checkout.',
        'option'       => 'Set as the default package.'
    ],
];
