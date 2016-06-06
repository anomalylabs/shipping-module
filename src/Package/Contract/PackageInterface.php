<?php namespace Anomaly\ShippingModule\Package\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface PackageInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Package\Contract
 */
interface PackageInterface extends EntryInterface
{

    /**
     * Set the weight.
     *
     * @param $weight
     * @return $this
     */
    public function setWeight($weight);

    /**
     * Get the weight.
     *
     * @return float
     */
    public function getWeight();

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType();

    /**
     * Get the height.
     *
     * @return string
     */
    public function getHeight();

    /**
     * Get the width.
     *
     * @return string
     */
    public function getWidth();

    /**
     * Get the length.
     *
     * @return string
     */
    public function getLength();

    /**
     * Get the length unit.
     *
     * @return string
     */
    public function getLengthUnit();

    /**
     * Get the weight unit.
     *
     * @return string
     */
    public function getWeightUnit();
}
