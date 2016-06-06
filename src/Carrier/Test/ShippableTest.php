<?php namespace Anomaly\ShippingModule\Carrier\Test;

use Anomaly\ShippingModule\Carrier\Contract\Shippable;
use Anomaly\ShippingModule\Package\PackageCollection;

/**
 * Class ShippableTest
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier\Test
 */
class ShippableTest implements Shippable
{

    /**
     * The to information.
     *
     * @var array
     */
    protected $to;

    /**
     * The from information.
     *
     * @var array
     */
    protected $from;

    /**
     * The package collection.
     *
     * @var PackageCollection
     */
    protected $packages;

    /**
     * Create a new ShippableTest instance.
     *
     * @param array             $from
     * @param array             $to
     * @param PackageCollection $packages
     */
    public function __construct(array $from, array $to, PackageCollection $packages)
    {
        $this->to       = $to;
        $this->from     = $from;
        $this->packages = $packages;
    }

    /**
     * Get the from business.
     *
     * @return string
     */
    public function getFromBusiness()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the from attention.
     *
     * @return string
     */
    public function getFromAttention()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the from address.
     *
     * @return string
     */
    public function getFromAddress()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the extra from address.
     *
     * @return string
     */
    public function getFromAddressExt()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the from city.
     *
     * @return string
     */
    public function getFromCity()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the from state.
     *
     * @return string
     */
    public function getFromState()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the from postal code.
     *
     * @return string
     */
    public function getFromPostalCode()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2] . '_' . $parts[3]);
    }

    /**
     * Get the from country.
     *
     * @return string
     */
    public function getFromCountry()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to business.
     *
     * @return string
     */
    public function getToBusiness()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to attention.
     *
     * @return string
     */
    public function getToAttention()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to address.
     *
     * @return string
     */
    public function getToAddress()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the extra to address.
     *
     * @return string
     */
    public function getToAddressExt()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to city.
     *
     * @return string
     */
    public function getToCity()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to state.
     *
     * @return string
     */
    public function getToState()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the to postal code.
     *
     * @return string
     */
    public function getToPostalCode()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2] . '_' . $parts[3]);
    }

    /**
     * Get the to country.
     *
     * @return string
     */
    public function getToCountry()
    {
        $parts = explode('_', snake_case(__FUNCTION__));

        return array_get($this->{$parts[1]}, $parts[2]);
    }

    /**
     * Get the packages.
     *
     * @return PackageCollection
     */
    public function getPackages()
    {
        return $this->packages;
    }
}
