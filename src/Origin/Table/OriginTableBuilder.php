<?php namespace Anomaly\ShippingModule\Origin\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class OriginTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class OriginTableBuilder extends TableBuilder
{

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'name',
        'address1' => [
            'sort_column' => 'address1',
            'value'       => '{{ array_filter([entry.address1, entry.address2])|join(", ") }}',
        ],
        'city',
        'state',
        'postal_code',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
    ];
}
