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
            'buttons' => [
                'add_zone',
            ],
        ],
        'methods' => [
            'data-toggle' => 'modal',
            'data-target' => '#modal',
            'data-href'   => 'admin/shipping/methods/{request.route.parameters.zone}',
            'href'        => 'admin/shipping/choose',
            'buttons'     => [
                'add_method' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/shipping/methods/{request.route.parameters.zone}/choose',
                ],
            ],
            'sections'    => [
                'rules' => [
                    'href'    => 'admin/shipping/methods/{request.route.parameters.method}/rules',
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
