<?php namespace Anomaly\ShippingModule\Method\Extension\Form;

use Anomaly\ConfigurationModule\Configuration\Form\ConfigurationFormBuilder;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
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
}
