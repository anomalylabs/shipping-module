<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\StoreModule\Contract\AddressInterface;

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
     * @param AddressInterface $address
     * @return ZoneCollection|null
     */
    public function resolve(AddressInterface $address)
    {
        /* @var ZoneCollection $zones */
        $zones = $this->zones->all();

        return $zones->resolve($address);
    }
}
