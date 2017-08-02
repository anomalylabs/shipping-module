<?php namespace Anomaly\ShippingModule\Rule;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Rule\Contract\RuleInterface;
use Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class RuleRepository
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RuleRepository extends EntryRepository implements RuleRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var RuleModel
     */
    protected $model;

    /**
     * Create a new RuleRepository instance.
     *
     * @param RuleModel $model
     */
    public function __construct(RuleModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a method rule by group.
     *
     * @param MethodInterface $method
     * @param GroupInterface $group
     * @return null|RuleInterface
     */
    public function findByMethodAndGroup(MethodInterface $method, GroupInterface $group)
    {
        return $this->model
            ->where('method_id', $method->getId())
            ->where('group_id', $group->getId())
            ->first();
    }
}
