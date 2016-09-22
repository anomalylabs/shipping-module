<?php namespace Anomaly\ShippingModule\Zone;

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
     * @param ZoneInterface $zone
     * @param array         $parameters
     * @return bool
     */
    public function matches(ZoneInterface $zone, array $parameters = [])
    {
        $country = array_get($parameters, 'country');

        if ($country && $zone->getCountry() && $zone->getCountry() != $country) {
            return false;
        }

        $state = array_get($parameters, 'state');

        if ($state && $zone->getStates() && in_array($state, $zone->getStates())) {
            return false;
        }

        $postal = array_get($parameters, 'postal_code');

        if ($postal && $zone->getPostalCodes() && !in_array($postal, $zone->getPostalCodes())) {
            return false;
        }

        $city = array_get($parameters, 'city');

        if ($city && $zone->getCities() && !in_array($city, $zone->getCities())) {
            return false;
        }

        return true;
    }
}
