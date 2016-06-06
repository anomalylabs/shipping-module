<?php namespace Anomaly\ShippingModule\Carrier;

use Anomaly\ShippingModule\Carrier\Contract\CarrierInterface;
use Anomaly\ShippingModule\Carrier\Contract\Shippable;
use Anomaly\ShippingModule\Rate\Contract\RateInterface;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class CarrierExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Carrier
 */
class CarrierExtension extends Extension implements CarrierInterface
{

    /**
     * The rate instance.
     *
     * @var RateInterface
     */
    protected $rate;

    /**
     * Get the price.
     *
     * @param Shippable $shippable
     * @return float
     */
    public function getPrice(Shippable $shippable)
    {
        return null;
    }

    /**
     * Get the rate.
     *
     * @return RateInterface
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the rate.
     *
     * @param RateInterface $rate
     * @return $this
     */
    public function setRate(RateInterface $rate)
    {
        $this->rate = $rate;

        return $this;
    }
}
