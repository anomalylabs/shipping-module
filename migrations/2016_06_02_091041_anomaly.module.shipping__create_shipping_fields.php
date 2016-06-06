<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateShippingFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateShippingFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'        => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'iso_code'    => 'anomaly.field_type.text',
        'zone'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Zone\ZoneModel'
            ]
        ],
        'country'     => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'handler' => 'countries'
            ]
        ],
        'states'      => [
            'type'   => 'anomaly.field_type.checkboxes',
            'config' => [
                'mode'    => 'tags',
                'handler' => 'states'
            ]
        ],
        'free'        => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'mode'  => 'checkbox',
                'label' => 'anomaly.module.shipping::field.free.option',
            ]
        ],
        'type'        => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'mode'          => 'radio',
                'default_value' => 'price',
                'options'       => [
                    'price'  => 'anomaly.module.shipping::field.type.option.price',
                    'weight' => 'anomaly.module.shipping::field.type.option.weight',
                ]
            ]
        ],
        'min_unit'    => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'min'      => 0,
                'decimals' => 2
            ]
        ],
        'max_unit'    => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'min'      => 1,
                'decimals' => 2
            ]
        ],
        'price'       => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'min'      => 1,
                'decimals' => 2
            ]
        ],
    ];

}
