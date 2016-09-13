<?php namespace Anomaly\ShippingModule\Rule;

use Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

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
}
