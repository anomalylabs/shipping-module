<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateShippablesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateShippablesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'      => 'shippables',
        'trashable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'item'   => [
            'required' => true,
        ],
        'shippable',
        'group'  => [
            'required' => true,
        ],
        'origin' => [
            'required' => true,
        ],
    ];

}
