<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateRatesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateRatesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'rates',
        'title_column' => 'name',
        'translatable' => true,
        'sortable'     => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'    => [
            'required'     => true,
            'translatable' => true,
        ],
        'zone'    => [
            'required' => true,
        ],
        'free',
        'rate'    => [
            'required' => true,
        ],
        'min_unit',
        'max_unit',
        'carrier' => [
            'required' => true,
        ],
    ];

}
