<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingZonesEntryModel;

/**
 * Class ZoneModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Zone
 */
class ZoneModel extends ShippingZonesEntryModel implements ZoneInterface
{

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
