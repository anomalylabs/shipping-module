<?php namespace Anomaly\ShippingModule\Shipping;

use Anomaly\OrdersModule\Order\Contract\OrderInterface;

/**
 * Class ShippingResolver
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Shipping
 */
class ShippingResolver
{

    /**
     * Resolve the shipping method.
     *
     * @param OrderInterface $order
     */
    public function resolve(OrderInterface $order)
    {
    }
}
