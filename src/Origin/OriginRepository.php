<?php namespace Anomaly\ShippingModule\Origin;

use Anomaly\ShippingModule\Origin\Contract\OriginRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class OriginRepository extends EntryRepository implements OriginRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var OriginModel
     */
    protected $model;

    /**
     * Create a new OriginRepository instance.
     *
     * @param OriginModel $model
     */
    public function __construct(OriginModel $model)
    {
        $this->model = $model;
    }
}
