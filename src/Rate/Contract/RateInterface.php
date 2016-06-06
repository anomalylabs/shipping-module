<?php namespace Anomaly\ShippingModule\Rate\Contract;

use Anomaly\ShippingModule\Carrier\CarrierExtension;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface RateInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate\Contract
 */
interface RateInterface extends EntryInterface
{

    /**
     * Get the rate type.
     *
     * @return string
     */
    public function getType();

    /**
     * Get the price.
     *
     * @return float
     */
    public function getPrice();

    /**
     * Get the carrier.
     *
     * @return CarrierExtension
     */
    public function getCarrier();

    /**
     * Get the minimum unit.
     *
     * @return float
     */
    public function getMinUnit();

    /**
     * Get the maximum unit.
     *
     * @return float
     */
    public function getMaxUnit();
}
