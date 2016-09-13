<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateOriginsStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateOriginsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'origins',
        'title_column' => 'name',
        'sortable'     => true,
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'        => [
            'required' => true,
            'unique'   => true,
        ],
        'phone'       => [
            'required' => true,
        ],
        'address1'    => [
            'required' => true,
        ],
        'address2',
        'city'        => [
            'required' => true,
        ],
        'state'       => [
            'required' => true,
        ],
        'postal_code' => [
            'required' => true,
        ],
        'country'     => [
            'required' => true,
        ],
    ];

}
