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
        'name'           => 'anomaly.field_type.text',
        'description'    => 'anomaly.field_type.textarea',
        'handling_fee'   => 'anomaly.field_type.text',
        'visible'        => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
        'item'           => 'anomaly.field_type.polymorphic',
        'slug'           => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '-',
            ],
        ],
        'extension'      => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'          => 'extension',
                'search'        => 'anomaly.module.shipping::method.*',
                'default_value' => 'anomaly.extension.table_rate_shipping_method',
            ],
        ],
        'country'        => [
            'type' => 'anomaly.field_type.country',
        ],
        'states'         => [
            'type'   => 'anomaly.field_type.checkboxes',
            'config' => [
                'handler' => 'states',
                'mode'    => 'tags',
            ],
        ],
        'postal_codes'   => 'anomaly.field_type.tags',
        'cities'         => 'anomaly.field_type.tags',
        'allowed_groups' => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Group\GroupModel',
            ],
        ],
        'origin'         => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Origin\OriginModel',
            ],
        ],
        'method'         => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Method\MethodModel',
            ],
        ],
        'group'          => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Group\GroupModel',
            ],
        ],
        'zone'           => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\ShippingModule\Zone\ZoneModel',
            ],
        ],
        'contact'        => 'anomaly.field_type.text',
        'business'       => 'anomaly.field_type.text',
        'email'          => 'anomaly.field_type.email',
        'phone'          => 'anomaly.field_type.text',
        'address1'       => 'anomaly.field_type.text',
        'address2'       => 'anomaly.field_type.text',
        'city'           => 'anomaly.field_type.text',
        'state'          => 'anomaly.field_type.state',
        'postal_code'    => 'anomaly.field_type.text',
        'adjustment'     => 'anomaly.field_type.text',
    ];
}
