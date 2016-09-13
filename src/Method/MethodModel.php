<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\CustomersModule\Customer\CustomerCollection;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel;

/**
 * Class MethodModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method
 */
class MethodModel extends ShippingMethodsEntryModel implements MethodInterface
{

    /**
     * Get the extension.
     *
     * @return MethodExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Return the related extension.
     *
     * @return MethodExtension
     */
    public function extension()
    {
        $extension = $this->getExtension();

        return $extension->setMethod($this);
    }
}
