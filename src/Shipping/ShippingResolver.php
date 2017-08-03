<?php namespace Anomaly\ShippingModule\Shipping;

use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Method\MethodResolver;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\ShippingModule\Zone\ZoneResolver;
use Anomaly\StoreModule\Contract\AddressInterface;

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
     * @param ZoneResolver $zones
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
     * @param AddressInterface $address
     * @return MethodCollection|null
     */
    public function resolve(AddressInterface $address)
    {
        $methods = new MethodCollection();

        if (!$zones = $this->zones->resolve($address)) {
            return $methods;
        }

        foreach ($zones as $zone) {

            /* @var ZoneInterface $zone */
            $methods = $methods->merge($this->methods->resolve($zone));
        }

        return $methods;
    }
}
