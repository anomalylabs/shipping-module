<?php namespace Anomaly\ShippingModule\Package;

use Anomaly\ShippingModule\Package\Contract\PackageInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingPackagesEntryModel;

/**
 * Class PackageModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Package
 */
class PackageModel extends ShippingPackagesEntryModel implements PackageInterface
{

    /**
     * Set the weight.
     *
     * @param $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the weight.
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the height.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->weight;
    }

    /**
     * Get the width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get the length.
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Get the length unit.
     *
     * @return string
     */
    public function getLengthUnit()
    {
        return config('streams::system.unit_system') == 'imperial' ? 'IN' : 'CM';
    }

    /**
     * Get the weight unit.
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return config('streams::system.unit_system') == 'imperial' ? 'LBS' : 'KGS';
    }
}
