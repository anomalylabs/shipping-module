<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateMethodsStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateMethodsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'methods',
        'title_column' => 'name',
        'translatable' => true,
        'trashable'    => true,
        'sortable'     => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'        => [
            'required'     => true,
            'translatable' => true,
        ],
        'slug'        => [
            'required' => true,
            'unique'   => true,
        ],
        'description' => [
            'translatable' => true,
        ],
        'extension'   => [
            'required' => true,
        ],
        'handling_fee',
        'tax',
        'maximum_package_weight',
        'minimum_weight',
        'maximum_weight',
        'hidden',
        'allowed_countries',
        'allowed_customer_groups',
        'allowed_product_types',
    ];

}
