<?php

return [
    'name'         => [
        'name'         => 'Name',
        'instructions' => [
            'zones'   => 'Specify a short descriptive name for this shipping zone.',
            'groups'  => 'Specify a short descriptive name for this shipping group.',
            'origins' => 'Specify a short descriptive name for this shipping origin.',
            'methods' => 'This will be the displayed name at checkout.',
        ],
    ],
    'slug'         => [
        'name'         => 'Slug',
        'instructions' => [
            'zones'  => 'The slug is used when accessing this zone via API.',
            'groups' => 'The slug is used when accessing this group via API.',
        ],
    ],
    'description'  => [
        'name'         => 'Description',
        'instructions' => [
            'zones'   => 'Briefly describe this shipping zone for others.',
            'groups'  => 'Briefly describe this shipping group for others.',
            'methods' => 'Briefly describe this shipping method for others.',
        ],
    ],
    'handling_fee' => [
        'name'         => 'Handling Fee',
        'instructions' => 'Specify a handling fee to be added to the shipping quote.',
    ],
    'visible'      => [
        'name'         => 'Visible',
        'instructions' => 'Is this shipping method publicly avaiable?',
    ],
    'extension'    => [
        'name' => 'Extension',
    ],
    'country'      => [
        'name'         => 'Country',
        'instructions' => [
            'zones'   => 'Which country does this zone apply to?',
            'origins' => 'Specify the origin country.',
        ],
        'warning'      => [
            'zones' => 'If not specified this zone will apply to all countries.',
        ],
    ],
    'states'       => [
        'name'         => 'States',
        'instructions' => 'Which state(s) does this zone apply to?',
        'warning'      => 'If not specified this zone will apply to all states within the country restriction.',
    ],
    'postal_codes' => [
        'name'         => 'ZIP/Postal Codes',
        'instructions' => 'Which ZIP/postal code(s) does this zone apply to?',
        'warning'      => 'If not specified this zone will apply to all postal codes within the states restriction.',
    ],
    'business'     => [
        'name'         => 'Business',
        'instructions' => 'Specify the business name.',
    ],
    'phone'        => [
        'name'         => 'Phone',
        'instructions' => 'Specify the contact phone number.',
    ],
    'email'        => [
        'name'         => 'Email',
        'instructions' => 'Specify the contact email address.',
    ],
    'address1'     => [
        'name' => 'Address',
    ],
    'address2'     => [
        'name'  => 'Address 2',
        'label' => 'Apartment, suite, unit etc.',
    ],
    'city'         => [
        'name'         => 'City',
        'instructions' => 'Specify the origin city.',
    ],
    'state'        => [
        'name'         => 'State/Region',
        'instructions' => 'Specify the origin state/region.',
    ],
    'postal_code'  => [
        'name'         => 'ZIP/Postal Code',
        'instructions' => 'Specify the origin ZIP/postal code.',
    ],
    'group'        => [
        'name'         => 'Group',
        'instructions' => [
            'rules'      => 'Which shipping group does this rule apply to?',
            'shippables' => 'Which shipping group does this item belong to?',
        ],
    ],
    'adjustment'   => [
        'name'         => 'Adjustment',
        'label'        => 'Price Adjustment',
        'instructions' => 'Specify how the price should be adjusted. You can use <strong>+/-</strong> values as well as <strong>+\-{weight}*0.5</strong> expressions.',
    ],
    'item'         => [
        'name' => 'Item',
    ],
    'shippable'    => [
        'name'         => 'Shippable',
        'instructions' => 'Does this item require shipping?',
    ],
    'origin'       => [
        'name'         => 'Origin',
        'instructions' => 'Where is this item shipped from?',
    ],
];
