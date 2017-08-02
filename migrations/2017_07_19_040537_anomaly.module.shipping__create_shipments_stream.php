<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateShipmentsStream
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateShipmentsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'shipments',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'method'   => [
            'required' => true,
        ],
        'tracking' => [
            'unique'   => true,
            'required' => true,
        ],
    ];

}
