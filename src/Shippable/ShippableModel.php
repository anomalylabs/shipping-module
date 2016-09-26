<?php namespace Anomaly\ShippingModule\Shippable;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Shippable\Command\GetShippingRates;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
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
     * Get the related group.
     *
     * @return GroupInterface
     */
    public function getGroup()
    {
        return $this->group;
    }
}
