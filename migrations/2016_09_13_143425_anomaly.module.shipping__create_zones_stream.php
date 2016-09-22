<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleShippingCreateZonesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'zones',
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
        'country',
        'states',
        'postal_codes',
        'cities',
    ];
}
