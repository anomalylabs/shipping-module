<?php namespace Anomaly\ShippingModule\Group;

use Anomaly\ShippingModule\Group\Command\GetShippingMethods;
use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\Streams\Platform\Model\Shipping\ShippingGroupsEntryModel;

/**
 * Class GroupModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GroupModel extends ShippingGroupsEntryModel implements GroupInterface
{

    /**
     * Return available methods.
     *
     * @param array $parameters
     * @return MethodCollection
     */
    public function methods(array $parameters = [])
    {
        return $this->dispatch(new GetShippingMethods($this, $parameters));
    }
}
