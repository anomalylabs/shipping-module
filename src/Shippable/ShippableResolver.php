<?php namespace Anomaly\ShippingModule\Shippable;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Method\MethodResolver;
use Anomaly\ShippingModule\Zone\ZoneResolver;

/**
 * Class ShippableResolver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ShippableResolver
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
     * Create a new ShippableResolver instance.
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
     * @param GroupInterface $group
     * @param array          $parameters
     * @return MethodCollection|null
     */
    public function resolve(GroupInterface $group, array $parameters = [])
    {
        if (!$zone = $this->zones->resolve($parameters)) {
            return new MethodCollection();
        }

        $methods = $this->methods->resolve($group, $zone);

        return $methods;
    }
}
