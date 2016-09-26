<?php namespace Anomaly\ShippingModule\Rule\Contract;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface RuleRepositoryInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface RuleRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Find a method rule by group.
     *
     * @param MethodInterface $method
     * @param GroupInterface  $group
     * @return null|RuleInterface
     */
    public function findByMethodAndGroup(MethodInterface $method, GroupInterface $group);
}
