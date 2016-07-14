<?php namespace Anomaly\ShippingModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class ShippingModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule
 */
class ShippingModule extends Module
{

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'methods' => [
            'buttons' => [
                'add_method' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/shipping/choose'
                ]
            ]
        ],
    ];

}
