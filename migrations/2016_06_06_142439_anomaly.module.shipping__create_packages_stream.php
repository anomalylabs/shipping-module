<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreatePackagesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreatePackagesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'packages',
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
        'name'   => [
            'unique'       => true,
            'required'     => true,
            'translatable' => true,
        ],
        'type'   => [
            'required' => true,
        ],
        'length' => [
            'required' => true,
        ],
        'width'  => [
            'required' => true,
        ],
        'height' => [
            'required' => true,
        ],
        'weight',
        'default',
    ];

}
