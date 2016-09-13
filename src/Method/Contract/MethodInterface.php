<?php namespace Anomaly\ShippingModule\Method\Contract;

use Anomaly\CustomersModule\Customer\CustomerCollection;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface MethodInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Contract
 */
interface MethodInterface extends EntryInterface
{

    /**
     * Get the extension.
     *
     * @return MethodExtension
     */
    public function getExtension();

    /**
     * Return the related extension.
     *
     * @return MethodExtension
     */
    public function extension();
}
