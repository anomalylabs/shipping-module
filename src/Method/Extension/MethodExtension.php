<?php namespace Anomaly\ShippingModule\Method\Extension;

use Anomaly\OrdersModule\Item\Contract\ItemInterface;
use Anomaly\OrdersModule\Order\Contract\OrderInterface;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\Command\GetFormBuilder;
use Anomaly\ShippingModule\Method\Extension\Form\MethodExtensionFormBuilder;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class MethodExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Extension
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
     * Return if the order is supported or not.
     *
     * @param MethodInterface $method
     * @param OrderInterface  $order
     */
    public function supported(OrderInterface $order)
    {
        $countries = $this->method->getAllowedCountries();
        $types     = $this->method->getAllowedProductTypes();
        $groups    = $this->method->getAllowedCustomerGroups();

        $items    = $order->getItems();
        $customer = $order->getCustomer();

        if ($countries && !in_array($order->getShippingCountry(), $countries)) {
            return false;
        }

        if ($customer && $groups->count() && !$customer->hasAnyGroup($groups)) {
            return false;
        }

        $unsupported = $items->filter(
            function (ItemInterface $item) use ($types) {

                $product = $item->getProduct();

                return $types->has($product->getAttribute('type_id'));
            }
        );

        if ($unsupported->count()) {
            return false;
        }

        return true;
    }

    /**
     * Return a quote for an order.
     *
     * @param OrderInterface $order
     * @throws \Exception
     * @return float
     */
    public function quote(OrderInterface $order)
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
