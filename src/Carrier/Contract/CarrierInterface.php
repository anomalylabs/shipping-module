<?php namespace Anomaly\ShippingModule\Carrier\Contract;

/**
 * Interface CarrierInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier\Contract
 */
/**
 * Interface CarrierInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier\Contract
 */
interface CarrierInterface
{

    /**
     * Get the price.
     *
     * @param Shippable $shippable
     * @return float
     */
    public function getPrice(Shippable $shippable);
}
