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
    ];

}
