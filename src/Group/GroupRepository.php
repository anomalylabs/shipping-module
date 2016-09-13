<?php namespace Anomaly\ShippingModule\Group;

use Anomaly\ShippingModule\Group\Contract\GroupRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class GroupRepository extends EntryRepository implements GroupRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var GroupModel
     */
    protected $model;

    /**
     * Create a new GroupRepository instance.
     *
     * @param GroupModel $model
     */
    public function __construct(GroupModel $model)
    {
        $this->model = $model;
    }
}
