<?php namespace Anomaly\ShippingModule\Zone\Contract;

use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Interface ZoneInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface ZoneInterface extends EntryInterface
{

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry();

    /**
     * Get the states.
     *
     * @return array
     */
    public function getStates();

    /**
     * Get the postal codes.
     *
     * @return array
     */
    public function getPostalCodes();

    /**
     * Get the cities.
     *
     * @return array
     */
    public function getCities();

    /**
     * Get the related methods.
     *
     * @return MethodCollection
     */
    public function getMethods();

    /**
     * Get the method relation.
     *
     * @return HasMany
     */
    public function methods();
}
