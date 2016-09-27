<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Method\Command\GetAdjustment;
use Anomaly\ShippingModule\Method\Command\GetPrice;
use Anomaly\ShippingModule\Method\Command\GetQuote;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
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
    public function quote(ShippableInterface $shippable, array $parameters = [])
    {
        return $this->dispatch(new GetQuote($this, $shippable, $parameters));
    }

    /**
     * Return the shipping price to a group.
     *
     * @param ShippableInterface $shippable
     * @return float
     */
    public function price(ShippableInterface $shippable, array $parameters = [])
    {
        return $this->dispatch(new GetPrice($this, $shippable, $this->quote($shippable, $parameters)));
    }

    /**
     * Return the shipping adjustment.
     *
     * @param array $parameters
     * @return float
     */
    public function adjustment(ShippableInterface $shippable, array $parameters = [])
    {
        return $this->dispatch(new GetAdjustment($this, $shippable, $this->quote($shippable, $parameters)));
    }

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
