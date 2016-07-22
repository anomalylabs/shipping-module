<?php namespace Anomaly\ShippingModule\Method\Contract;

use Anomaly\CustomersModule\Customer\CustomerCollection;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Interface MethodInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Contract
 */
interface MethodInterface extends EntryInterface
{

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the extension.
     *
     * @return MethodExtension
     */
    public function getExtension();

    /**
     * Return the related extension.
     *
     * @return MethodExtension
     */
    public function extension();

    /**
     * Get the allowed countries.
     *
     * @return array
     */
    public function getAllowedCountries();

    /**
     * Get the allowed customer groups.
     *
     * @return CustomerCollection
     */
    public function getAllowedProductTypes();

    /**
     * Return the allowed product types relation.
     *
     * @return BelongsToMany
     */
    public function allowedProductTypes();

    /**
     * Get the allowed customer groups.
     *
     * @return CustomerCollection
     */
    public function getAllowedCustomerGroups();

    /**
     * Return the allowed customer groups relation.
     *
     * @return BelongsToMany
     */
    public function allowedCustomerGroups();
}
