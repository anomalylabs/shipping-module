<?php namespace Anomaly\ShippingModule\Origin\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface OriginInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface OriginInterface extends EntryInterface
{

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get the contact.
     *
     * @return string
     */
    public function getContact();

    /**
     * Get the business.
     *
     * @return string
     */
    public function getBusiness();

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Get the phone.
     *
     * @return string
     */
    public function getPhone();

    /**
     * Get the address1.
     *
     * @return string
     */
    public function getAddress1();

    /**
     * Get the address2.
     *
     * @return string
     */
    public function getAddress2();

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity();

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState();

    /**
     * Get the postal code.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry();
}
