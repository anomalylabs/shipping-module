<?php namespace Anomaly\ShippingModule\Carrier\Contract;

use Anomaly\ShippingModule\Package\PackageCollection;

/**
 * Interface Shippable
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier\Contract
 */
interface Shippable
{

    /**
     * Get the from business.
     *
     * @return string
     */
    public function getFromBusiness();

    /**
     * Get the from attention.
     *
     * @return string
     */
    public function getFromAttention();

    /**
     * Get the from address.
     *
     * @return string
     */
    public function getFromAddress();

    /**
     * Get the extra from address.
     *
     * @return string
     */
    public function getFromAddressExt();

    /**
     * Get the from city.
     *
     * @return string
     */
    public function getFromCity();

    /**
     * Get the from state.
     *
     * @return string
     */
    public function getFromState();

    /**
     * Get the from postal code.
     *
     * @return string
     */
    public function getFromPostalCode();

    /**
     * Get the from country.
     *
     * @return string
     */
    public function getFromCountry();

    /**
     * Get the to business.
     *
     * @return string
     */
    public function getToBusiness();

    /**
     * Get the to attention.
     *
     * @return string
     */
    public function getToAttention();

    /**
     * Get the to address.
     *
     * @return string
     */
    public function getToAddress();

    /**
     * Get the extra to address.
     *
     * @return string
     */
    public function getToAddressExt();

    /**
     * Get the to city.
     *
     * @return string
     */
    public function getToCity();

    /**
     * Get the to state.
     *
     * @return string
     */
    public function getToState();

    /**
     * Get the to postal code.
     *
     * @return string
     */
    public function getToPostalCode();

    /**
     * Get the to country.
     *
     * @return string
     */
    public function getToCountry();

    /**
     * Get the packages.
     *
     * @return PackageCollection
     */
    public function getPackages();
}
