<?php namespace Anomaly\ShippingModule\Rate;

use Anomaly\ShippingModule\Carrier\Contract\Shippable;
use Anomaly\ShippingModule\Package\Contract\PackageInterface;
use Anomaly\Streams\Platform\Entry\EntryCriteria;
use Anomaly\Streams\Platform\Support\Presenter;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class RateCriteria
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate
 */
class RateCriteria extends EntryCriteria
{

    /**
     * Return only applicable rates.
     *
     * @param Shippable|Presenter $shippable
     * @return $this
     */
    public function applicable($shippable)
    {
        if ($shippable instanceof Presenter) {
            $shippable = $shippable->getObject();
        }

        /* @var PackageInterface $package */
        $package = $shippable->getPackages()->first();

        $this->query->where(
            function (Builder $query) use ($package) {

                $query->where('rate', 'weight');

                $query->where('min_unit', '<=', $package->getWeight());
                $query->where('max_unit', '>=', $package->getWeight());
            }
        );

        return $this;
    }
}
