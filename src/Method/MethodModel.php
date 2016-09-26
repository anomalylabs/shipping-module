<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\Command\GetPrice;
use Anomaly\ShippingModule\Method\Command\GetQuote;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel;

/**
 * Class MethodModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MethodModel extends ShippingMethodsEntryModel implements MethodInterface
{

    /**
     * Return the shipping quote.
     *
     * @param array $parameters
     * @return float
     */
    public function quote(array $parameters = [])
    {
        return $this->dispatch(new GetQuote($this, $parameters));
    }

    /**
     * Return the shipping price to a group.
     *
     * @param GroupInterface $group
     * @return float
     */
    public function price(GroupInterface $group, array $parameters = [])
    {
        return $this->dispatch(new GetPrice($this, $group, $this->quote($parameters)));
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
}
