<?php namespace Anomaly\ShippingModule\Shippable;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Origin\Contract\OriginInterface;
use Anomaly\ShippingModule\Shippable\Command\GetShippingRates;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Model\Shipping\ShippingShippablesEntryModel;

/**
 * Class ShippableModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ShippableModel extends ShippingShippablesEntryModel implements ShippableInterface
{

    /**
     * Return the available shipping methods.
     *
     * @param array $parameters
     * @return MethodCollection
     */
    public function methods(array $parameters = [])
    {
        return $this->dispatch(new GetShippingRates($this->getGroup(), $parameters));
    }

    /**
     * Return whether the item
     * has dimensions or not.
     *
     * @return bool
     */
    public function itemHasDimensions()
    {
        return count(
            array_filter(
                [
                    $this->getItemWidth(),
                    $this->getItemHeight(),
                    $this->getItemLength(),
                    $this->getItemWeight(),
                ]
            )
        ) == 4;
    }

    /**
     * Return the item length.
     *
     * @return float|null
     */
    public function getItemLength()
    {
        $item = $this->getItem();

        return $item->getShippableLength();
    }

    /**
     * Return the item width.
     *
     * @return float|null
     */
    public function getItemWidth()
    {
        $item = $this->getItem();

        return $item->getShippableWidth();
    }

    /**
     * Return the item height.
     *
     * @return float|null
     */
    public function getItemHeight()
    {
        $item = $this->getItem();

        return $item->getShippableHeight();
    }

    /**
     * Return the item weight.
     *
     * @return float|null
     */
    public function getItemWeight()
    {
        $item = $this->getItem();

        return $item->getShippableWeight();
    }

    /**
     * Get the item unit system.
     *
     * @return string
     */
    public function getItemUnitSystem()
    {
        $item = $this->getItem();

        return $item->getShippableUnitSystem();
    }

    /**
     * Get the related item.
     *
     * @return EloquentModel
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Get the related group.
     *
     * @return GroupInterface
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Get the related origin.
     *
     * @return OriginInterface
     */
    public function getOrigin()
    {
        return $this->origin;
    }
}
