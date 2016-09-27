<?php namespace Anomaly\ShippingModule\Shippable;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Group\GroupCollection;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Shippable\Command\GetShippingMethods;
use Anomaly\Streams\Platform\Entry\EntryCollection;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ShippableCollection
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ShippableCollection extends EntryCollection
{

    use DispatchesJobs;

    /**
     * Return shippables only in the group.
     *
     * @param GroupInterface $group
     * @return ShippableCollection
     */
    public function group(GroupInterface $group)
    {
        return $this->filter(
            function ($item) use ($group) {
                return $item->shippable->getGroupId() == $group->getId();
            }
        );
    }

    /**
     * Return shippable groups.
     *
     * @return GroupCollection
     */
    public function groups()
    {
        $groups = $this
            ->map(
                function ($item) {
                    return $item->shippable->getGroup();
                }
            )
            ->unique();

        return new GroupCollection($groups->all());
    }

    /**
     * Return the available methods.
     *
     * @param array $parameters
     * @return MethodCollection
     */
    public function methods(array $parameters = [])
    {
        return $this->dispatch(new GetShippingMethods($this->first()->shippable, $parameters));
    }
}
