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
        'name'                    => 'anomaly.field_type.text',
        'description'             => 'anomaly.field_type.textarea',
        'handling_fee'            => 'anomaly.field_type.text',
        'hidden'                  => 'anomaly.field_type.boolean',
        'slug'                    => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '-',
            ]
        ],
        'extension'               => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'          => 'extension',
                'search'        => 'anomaly.module.shipping::method.*',
                'default_value' => 'anomaly.extension.table_rate_shipping_method'
            ]
        ],
        'tax'                     => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\TaxesModule\Tax\TaxModel',
            ]
        ],
        'allowed_customer_groups' => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Anomaly\CustomersModule\Group\GroupModel'
            ]
        ],
        'allowed_product_types'   => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Anomaly\ProductsModule\Type\TypeModel'
            ]
        ],
        'allowed_countries'       => [
            'type'   => 'anomaly.field_type.checkboxes',
            'config' => [
                'mode'    => 'tags',
                'handler' => 'countries',
            ]
        ],
    ];

}
