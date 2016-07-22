<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\OrdersModule\Order\Contract\OrderInterface;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Streams\Platform\Support\Presenter;

/**
 * Class MethodCollection
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method
 */
class MethodCollection extends EntryCollection
{

    /**
     * Return the supported
     * methods for an order.
     *
     * @param $order
     * @return MethodCollection
     */
    public function supported($order)
    {
        if ($order instanceof Presenter) {
            $order = $order->getObject();
        }

        return $this->filter(
            function (MethodInterface $method) use ($order) {

                /* @var OrderInterface $order */
                return $method->extension()->supported($order);
            }
        );
    }
}
