<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MethodRepository extends EntryRepository implements MethodRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MethodModel
     */
    protected $model;

    /**
     * Create a new MethodRepository instance.
     *
     * @param MethodModel $model
     */
    public function __construct(MethodModel $model)
    {
        $this->model = $model;
    }
}
