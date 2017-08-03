<?php namespace Anomaly\ShippingModule\Method\Extension;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\Command\GetFormBuilder;
use Anomaly\ShippingModule\Method\Extension\Form\MethodExtensionFormBuilder;
use Anomaly\StoreModule\Contract\AddressInterface;
use Anomaly\StoreModule\Contract\ShippableInterface;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class MethodExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MethodExtension extends Extension
{

    /**
     * The method interface.
     *
     * @var MethodInterface
     */
    protected $method;

    /**
     * Return the method form.
     *
     * @param MethodInterface|null $method
     * @return MethodExtensionFormBuilder
     */
    public function form()
    {
        return $this->dispatch(new GetFormBuilder($this, $this->getMethod()));
    }

    /**
     * Return a shipping quote.
     *
     * @param ShippableInterface $shippable
     * @param array              $parameters
     * @return float
     * @throws \Exception
     */
    public function quote(ShippableInterface $shippable, AddressInterface $address)
    {
        throw new \Exception(__CLASS__ . "must implement " . __METHOD__);
    }

    /**
     * Get the method.
     *
     * @return MethodInterface
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the method.
     *
     * @param MethodInterface $method
     * @return $this
     */
    public function setMethod(MethodInterface $method)
    {
        $this->method = $method;

        return $this;
    }
}
