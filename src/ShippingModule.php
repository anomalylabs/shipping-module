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
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'addon';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'rates' => [
            'buttons' => [
                'add_rate'
            ]
        ],
        'zones' => [
            'buttons' => [
                'new_zone' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/shipping/zones/choose'
                ]
            ]
        ]
    ];

}
