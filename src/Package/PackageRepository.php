<?php namespace Anomaly\ShippingModule\Package;

use Anomaly\ShippingModule\Package\Contract\PackageInterface;
use Anomaly\ShippingModule\Package\Contract\PackageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class PackageRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Package
 */
class PackageRepository extends EntryRepository implements PackageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PackageModel
     */
    protected $model;

    /**
     * Create a new PackageRepository instance.
     *
     * @param PackageModel $model
     */
    public function __construct(PackageModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find the default package.
     *
     * @return PackageInterface
     */
    public function findDefault()
    {
        if (!$default = $this->model->where('default', true)->first()) {
            $default = $this->first();
        }

        return $default;
    }
}
