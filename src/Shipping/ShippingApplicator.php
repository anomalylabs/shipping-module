<?php namespace Anomaly\ShippingModule\Shipping;

use Anomaly\OrdersModule\Order\Contract\OrderInterface;

/**
 * Class ShippingApplicator
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Shipping
 */
class ShippingApplicator
{

    /**
     * Apply shipping charges
     *
     * @param OrderInterface $order
     */
    public function apply(OrderInterface $order)
    {
        $method = $order->getShippingMethod();

        $quote = $method
            ->extension()
            ->quote($order);

        $order->setAttribute('shipping_quote', $quote);
    }
}
