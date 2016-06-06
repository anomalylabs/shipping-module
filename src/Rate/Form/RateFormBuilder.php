<?php namespace Anomaly\ShippingModule\Rate\Form;

use Anomaly\ShippingModule\Carrier\CarrierExtension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class RateFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate\Form
 */
class RateFormBuilder extends FormBuilder
{

    /**
     * The carrier extension.
     *
     * @var null|CarrierExtension
     */
    protected $carrier = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'carrier'
    ];

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $rate = $this->getFormEntry();

        if ($carrier = $this->getCarrier()) {
            $rate->setAttribute('carrier', $carrier);
        }
    }

    /**
     * Get the carrier.
     *
     * @return CarrierExtension|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set the carrier extension.
     *
     * @param CarrierExtension $carrier
     * @return $this
     */
    public function setCarrier(CarrierExtension $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }
}
