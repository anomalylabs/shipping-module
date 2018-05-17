<?php namespace Anomaly\ShippingModule\Shipping\Contract;

/**
 * Interface ShippableInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface ShippableInterface
{

    /**
     * Return if shippable or not.
     *
     * @return bool
     */
    public function isShippable();

    /**
     * Get the shipping group.
     *
     * @return GroupModel
     */
    public function getShippingGroup();

    /**
     * Get the width.
     *
     * @return float
     */
    public function getShippableWidth();

    /**
     * Get the height.
     *
     * @return float
     */
    public function getShippableHeight();

    /**
     * Get the length.
     *
     * @return float
     */
    public function getShippableLength();

    /**
     * Get the weight.
     *
     * @return float
     */
    public function getShippableWeight();

    /**
     * Get the volume.
     *
     * @return float
     */
    public function getShippableVolume();

}
