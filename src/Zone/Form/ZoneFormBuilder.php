<?php namespace Anomaly\ShippingModule\Zone\Form;

use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class ZoneFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Zone\Form
 */
class ZoneFormBuilder extends FormBuilder
{

    /**
     * The country to
     * limit states to.
     *
     * @var null|string
     */
    protected $country = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'country'
    ];

    /**
     * Fired after form is built.
     */
    public function onBuilt()
    {
        /* @var ZoneInterface $zone */
        if ($this->getFormMode() == 'edit' && $zone = $this->getFormEntry()) {
            $this->setCountry($zone->getCountry());
        }

        $this->setFields(
            [
                '*',
                'states' => [
                    'config' => [
                        'countries' => [$this->getCountry()]
                    ]
                ]
            ]
        );
    }

    /**
     * Get the country.
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the country.
     *
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $zone = $this->getFormEntry();

        if ($country = $this->getCountry()) {
            $zone->setAttribute('country', $country);
        }
    }
}
