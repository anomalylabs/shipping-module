<?php namespace Anomaly\ShippingModule\Zone\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class ZoneTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Zone\Table
 */
class ZoneTableBuilder extends TableBuilder
{

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'fields' => [
                'name'
            ]
        ],
        'country'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'name',
        'country',
        [
            'value'   => 'entry.states.count',
            'wrapper' => '<span class="label label-info">{value} states</span>',
        ]
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
