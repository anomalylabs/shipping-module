<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;

/**
 * Class MethodResolver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MethodResolver
{

    /**
     * Resolve available zone methods.
     *
     * @param ZoneInterface $zone
     * @return MethodCollection
     */
    public function resolve(ZoneInterface $zone)
    {
        return $zone->getMethods();
    }
}
