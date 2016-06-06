<?php

return [
    'name'        => [
        'name' => 'Name'
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
        'name' => 'Zone'
    ],
    'free'        => [
        'name'         => 'Free Shipping',
        'instructions' => 'Is this shipping rate free?',
        'warning'      => 'If enabled, the <strong>Shipping Rate</strong> will be ignored.',
        'option'       => 'Yes, this is shipping rate is free.'
    ],
    'type'        => [
        'name'         => 'Shipping Rate',
        'instructions' => 'Specify how this shipping rate is calculated.',
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
        'instructions' => 'Specify the minimum price or weight for this shipping rate.',
    ],
    'max_unit'    => [
        'name'         => 'Maximum Price/Weight',
        'instructions' => 'Specify the maximum price or weight for this shipping rate.',
    ],
    'price'       => [
        'name'         => 'Shipping Cost',
        'instructions' => 'Specify the shipping cost.',
    ],
];
