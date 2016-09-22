<?php namespace Anomaly\ShippingModule\Zone;

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
     * @param array $parameters
     * @return ZoneInterface|null
     */
    public function resolve(array $parameters = [])
    {
        return $this->first(
            function ($zone) use ($parameters) {

                /* @var ZoneInterface $zone */
                return (new ZoneMatcher())->matches($zone, $parameters);
            }
        );
    }
}
