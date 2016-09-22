<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
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
     * @param GroupInterface $group
     * @param ZoneInterface  $zone
     * @return MethodCollection
     */
    public function resolve(GroupInterface $group, ZoneInterface $zone)
    {
        return $zone->getMethods();
    }
}
