<?php namespace Anomaly\ShippingModule\Package\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface PackageRepositoryInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Package\Contract
 */
interface PackageRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Find the default package.
     *
     * @return PackageInterface
     */
    public function findDefault();
}
