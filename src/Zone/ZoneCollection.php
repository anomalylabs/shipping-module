<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\CustomersModule\Address\Contract\AddressInterface;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class ZoneCollection
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ZoneCollection extends EntryCollection
{

    /**
     * Collect available zones.
     *
     * @param AddressInterface $address
     * @return ZoneInterface|null
     */
    public function resolve(AddressInterface $address)
    {
        $matcher = new ZoneMatcher();

        return $this->first(
            function ($zone) use ($matcher, $address) {

                /* @var ZoneInterface $zone */
                return $matcher->matches($zone, $address);
            }
        );
    }
}
