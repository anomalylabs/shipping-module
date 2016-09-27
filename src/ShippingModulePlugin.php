<?php namespace Anomaly\ShippingModule;

use Anomaly\ShippingModule\Shipping\ShippingResolver;
use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class ShippingModulePlugin
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ShippingModulePlugin extends Plugin
{

    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'shipping',
                function (array $parameters = []) {
                    return app(ShippingResolver::class)->resolve($parameters);
                }
            ),
        ];
    }
}
