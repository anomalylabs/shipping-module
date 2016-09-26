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
        if (!$this->applies(array_get($parameters, 'country'), $zone->getCountry())) {
            return false;
        }

        if (!$this->applies(array_get($parameters, 'state'), $zone->getStates())) {
            return false;
        }

        if (!$this->applies(array_get($parameters, 'postal_code'), $zone->getPostalCodes())) {
            return false;
        }

        if (!$this->applies(array_get($parameters, 'city'), $zone->getCities())) {
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
