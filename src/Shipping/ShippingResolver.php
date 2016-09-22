<?php namespace Anomaly\ShippingModule\Shipping;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodResolver;
use Anomaly\ShippingModule\Zone\ZoneResolver;

/**
 * Class ShippingResolver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ShippingResolver
{

    /**
     * The zone resolver.
     *
     * @var ZoneResolver $zones
     */
    protected $zones;

    /**
     * The method resolver.
     *
     * @var MethodResolver
     */
    protected $methods;

    /**
     * Create a new ShippingResolver instance.
     *
     * @param ZoneResolver   $zones
     * @param MethodResolver $methods
     */
    public function __construct(ZoneResolver $zones, MethodResolver $methods)
    {
        $this->zones   = $zones;
        $this->methods = $methods;
    }

    /**
     * Resolve the available shipping methods.
     *
     * @param array $parameters
     */
    public function resolve(GroupInterface $group, array $parameters = [])
    {
        $zones   = $this->zones->resolve($parameters);
        $methods = $this->methods->resolve($group, $zones);

        dd($methods);
    }
}
