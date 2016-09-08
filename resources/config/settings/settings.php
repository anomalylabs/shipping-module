<?php

return [
    'business'    => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.business',
    ],
    'name'        => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.name',
    ],
    'phone'       => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.phone',
    ],
    'address'     => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.address',
    ],
    'address2'    => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.address2',
    ],
    'city'        => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.city',
    ],
    'state'       => [
        'type' => 'anomaly.field_type.state',
        'bind' => 'anomaly.module.shipping::shipper.state',
    ],
    'postal_code' => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'anomaly.module.shipping::shipper.postal_code',
    ],
    'country'     => [
        'type'   => 'anomaly.field_type.country',
        'bind'   => 'anomaly.module.shipping::shipper.country',
        'config' => [
            'top_options' => [
                'US',
            ],
        ],
    ],
];
