<?php namespace Anomaly\ShippingModule\Rate;

use Anomaly\ShippingModule\Rate\Contract\RateInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingRatesEntryModel;

/**
 * Class RateModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate
 */
class RateModel extends ShippingRatesEntryModel implements RateInterface
{

    /**
     * Get the rate type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the minimum unit.
     *
     * @return float
     */
    public function getMinUnit()
    {
        return $this->min_unit;
    }

    /**
     * Get the maximum unit.
     *
     * @return float
     */
    public function getMaxUnit()
    {
        return $this->max_unit;
    }
}
