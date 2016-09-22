<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Method\MethodModel;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingZonesEntryModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class ZoneModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
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

    /**
     * Get the states.
     *
     * @return array
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Get the postal codes.
     *
     * @return array
     */
    public function getPostalCodes()
    {
        return $this->postal_codes;
    }

    /**
     * Get the cities.
     *
     * @return array
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Get the related methods.
     *
     * @return MethodCollection
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * Get the method relation.
     *
     * @return HasMany
     */
    public function methods()
    {
        return $this->hasMany(MethodModel::class, 'zone_id');
    }
}
