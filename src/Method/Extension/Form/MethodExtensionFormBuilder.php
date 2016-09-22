<?php namespace Anomaly\ShippingModule\Method\Extension\Form;

use Anomaly\ConfigurationModule\Configuration\Form\ConfigurationFormBuilder;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;

/**
 * Class MethodExtensionFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class MethodExtensionFormBuilder extends MultipleFormBuilder
{

    /**
     * The zone instance.
     *
     * @var null|ZoneInterface
     */
    protected $zone = null;

    /**
     * Fired just before the
     * method form is saved.
     */
    public function onSavingMethod()
    {
        $entry = $this->getChildFormEntry('method');

        if ($zone = $this->getZone()) {
            $entry->setAttribute('zone', $zone);
        }
    }

    /**
     * Fired just after the
     * method form is saved.
     */
    public function onSavedMethod()
    {
        /* @var MethodInterface $method */
        /* @var ConfigurationFormBuilder $configuration */
        $method        = $this->getChildFormEntry('method');
        $configuration = $this->getChildForm('configuration');

        $configuration->setScope($method->getId());
    }

    /**
     * Get the zone.
     *
     * @return ZoneInterface|null
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set the zone.
     *
     * @param ZoneInterface $zone
     * @return $this
     */
    public function setZone(ZoneInterface $zone)
    {
        $this->zone = $zone;

        return $this;
    }
}
