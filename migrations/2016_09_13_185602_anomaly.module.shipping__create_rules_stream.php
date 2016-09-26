<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleShippingCreateRulesStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleShippingCreateRulesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'rules',
        'translatable' => true,
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'       => [
            'required'     => true,
            'translatable' => true,
        ],
        'method'     => [
            'required' => true,
        ],
        'group'      => [
            'required' => true,
        ],
        'adjustment' => [
            'required' => true,
        ],
    ];
}
