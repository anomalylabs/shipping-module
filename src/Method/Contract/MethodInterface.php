<?php namespace Anomaly\ShippingModule\Method\Contract;

use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\StoreModule\Contract\AddressInterface;
use Anomaly\ShippingModule\Shipping\Contract\ShippableInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface MethodInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface MethodInterface extends EntryInterface
{

    /**
     * Return the shipping quote.
     *
     * @param ShippableInterface $shippable
     * @param AddressInterface $address
     * @return float
     */
    public function quote(ShippableInterface $shippable, AddressInterface $address);

    /**
     * Return the shipping price to a group.
     *
     * @param ShippableInterface $shippable
     * @param AddressInterface $address
     * @return float
     */
    public function price(ShippableInterface $shippable, AddressInterface $address);

    /**
     * Return the shipping adjustment.
     *
     * @param ShippableInterface $shippable
     * @param AddressInterface $address
     * @return float
     */
    public function adjustment(ShippableInterface $shippable, AddressInterface $address);

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get the handling fee.
     *
     * @return float
     */
    public function getHandlingFee();

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
}
