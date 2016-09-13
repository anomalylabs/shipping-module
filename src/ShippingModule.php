<?php namespace Anomaly\ShippingModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class ShippingModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class ShippingModule extends Module
{

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'zones'   => [
            'buttons'  => [
                'add_zone',
            ],
            'sections' => [
                'methods' => [
                    'href'    => 'admin/shipping/methods/{request.route.parameters.zone}',
                    'buttons' => [
                        'add_method' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/shipping/methods/{request.route.parameters.zone}/choose',
                        ],
                    ],
                ],
                'rules'   => [
                    'href'    => 'admin/shipping/rules/{request.route.parameters.method}',
                    'buttons' => [
                        'add_rule',
                    ],
                ],
            ],
        ],
        'groups'  => [
            'buttons' => [
                'new_group',
            ],
        ],
        'origins' => [
            'buttons' => [
                'add_origin',
            ],
        ],
    ];

}
