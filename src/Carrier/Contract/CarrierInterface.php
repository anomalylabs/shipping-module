<?php namespace Anomaly\ShippingModule\Carrier\Contract;

/**
 * Interface CarrierInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier\Contract
 */
use Anomaly\ShippingModule\Rate\Form\RateCarrierFormBuilder;

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
     * Integrate into the rate carrier form.
     *
     * @param RateCarrierFormBuilder $builder
     */
    public function integrate(RateCarrierFormBuilder $builder);

    /**
     * Get the price.
     *
     * @param Shippable $shippable
     * @return float
     */
    public function getPrice(Shippable $shippable);
}
