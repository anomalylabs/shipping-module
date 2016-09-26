<?php namespace Anomaly\ShippingModule\Origin;

use Anomaly\ShippingModule\Origin\Contract\OriginInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingOriginsEntryModel;

/**
 * Class OriginModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class OriginModel extends ShippingOriginsEntryModel implements OriginInterface
{

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the contact.
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Get the business.
     *
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the address1.
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Get the address2.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the postal code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

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
