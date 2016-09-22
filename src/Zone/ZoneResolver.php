<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;

/**
 * Class ZoneResolver
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ZoneResolver
{

    /**
     * The zone repository.
     *
     * @var ZoneRepositoryInterface
     */
    protected $zones;

    /**
     * Create a new ZoneResolver instance.
     *
     * @param ZoneRepositoryInterface $zones
     */
    public function __construct(ZoneRepositoryInterface $zones)
    {
        $this->zones = $zones;
    }

    /**
     * Resolve available zones.
     *
     * @param array $parameters
     * @return ZoneInterface|null
     */
    public function resolve(array $parameters = [])
    {
        /* @var ZoneCollection $zones */
        $zones = $this->zones->all();

        return $zones->resolve($parameters);
    }
}