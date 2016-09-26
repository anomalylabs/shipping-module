<?php namespace Anomaly\ShippingModule\Method\Contract;

use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
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
     * @param array $parameters
     * @return float
     */
    public function quote(ShippableInterface $shippable, array $parameters = []);

    /**
     * Return the shipping price to a group.
     *
     * @param ShippableInterface $shippable
     * @return float
     */
    public function price(ShippableInterface $shippable, array $parameters = []);

    /**
     * Return the shipping adjustment.
     *
     * @param array $parameters
     * @return float
     */
    public function adjustment(ShippableInterface $shippable, array $parameters = []);

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
