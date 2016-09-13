<?php namespace Anomaly\ShippingModule\Shippable;

use Anomaly\ShippingModule\Shippable\Contract\ShippableRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ShippableRepository extends EntryRepository implements ShippableRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ShippableModel
     */
    protected $model;

    /**
     * Create a new ShippableRepository instance.
     *
     * @param ShippableModel $model
     */
    public function __construct(ShippableModel $model)
    {
        $this->model = $model;
    }
}
