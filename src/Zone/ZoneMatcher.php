<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\StoreModule\Contract\AddressInterface;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;

/**
 * Class ZoneMatcher
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ZoneMatcher
{

    /**
     * Return if a zone matches an address.
     *
     * @param ZoneInterface    $zone
     * @param AddressInterface $address
     * @return bool
     */
    public function matches(ZoneInterface $zone, AddressInterface $address)
    {
        if (!$this->applies($address->getCountry(), $zone->getCountry())) {
            return false;
        }

        if (!$this->applies($address->getState(), $zone->getStates())) {
            return false;
        }

        if (!$this->applies($address->getPostalCode(), $zone->getPostalCodes())) {
            return false;
        }

        if (!$this->applies($address->getCity(), $zone->getCities())) {
            return false;
        }

        return true;
    }

    /**
     * Return if a zone applies
     * based on a parameter value.
     *
     * @param $parameter
     * @param $zone
     * @return bool
     */
    protected function applies($parameter, $zone)
    {
        if (!$parameter && !$zone) {
            return true;
        }

        if (!$parameter && $zone) {
            return false;
        }

        if (is_string($zone) && $parameter && $zone && $parameter != $zone) {
            return false;
        }

        if (is_array($zone) && $parameter && $zone && !in_array($parameter, $zone)) {
            return false;
        }

        return true;
    }
}
