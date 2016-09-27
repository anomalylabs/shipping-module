<?php namespace Anomaly\ShippingModule\Group\Contract;

use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface GroupInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface GroupInterface extends EntryInterface
{

    /**
     * Return available methods.
     *
     * @param array $parameters
     * @return MethodCollection
     */
    public function methods(array $parameters = []);
}
