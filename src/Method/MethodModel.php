<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\CustomersModule\Customer\CustomerCollection;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel;

/**
 * Class MethodModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method
 */
class MethodModel extends ShippingMethodsEntryModel implements MethodInterface
{

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the extension.
     *
     * @return MethodExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Return the related extension.
     *
     * @return MethodExtension
     */
    public function extension()
    {
        $extension = $this->getExtension();

        return $extension->setMethod($this);
    }

    /**
     * Get the allowed countries.
     *
     * @return array
     */
    public function getAllowedCountries()
    {
        return $this->allowed_countries;
    }

    /**
     * Get the allowed customer groups.
     *
     * @return CustomerCollection
     */
    public function getAllowedProductTypes()
    {
        return $this->allowed_product_types;
    }

    /**
     * Get the allowed customer groups.
     *
     * @return CustomerCollection
     */
    public function getAllowedCustomerGroups()
    {
        return $this->allowed_customer_groups;
    }
}
