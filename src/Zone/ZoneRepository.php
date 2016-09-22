<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class ZoneRepository
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ZoneRepository extends EntryRepository implements ZoneRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ZoneModel
     */
    protected $model;

    /**
     * Create a new ZoneRepository instance.
     *
     * @param ZoneModel $model
     */
    public function __construct(ZoneModel $model)
    {
        $this->model = $model;
    }
}
