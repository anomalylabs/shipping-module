<?php namespace Anomaly\ShippingModule;

use Anomaly\ShippingModule\Shippable\ShippableCollection;
use Anomaly\ShippingModule\Shippable\ShippableModel;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\EloquentCollection;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Support\Collection;

/**
 * Class ShippingModuleServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule
 */
class ShippingModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\Streams\Platform\Model\Shipping\ShippingZonesEntryModel'   => 'Anomaly\ShippingModule\Zone\ZoneModel',
        'Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel' => 'Anomaly\ShippingModule\Method\MethodModel',
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface'     => 'Anomaly\ShippingModule\Rule\RuleRepository',
        'Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface'     => 'Anomaly\ShippingModule\Zone\ZoneRepository',
        'Anomaly\ShippingModule\Group\Contract\GroupRepositoryInterface'   => 'Anomaly\ShippingModule\Group\GroupRepository',
        'Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface' => 'Anomaly\ShippingModule\Method\MethodRepository',
    ];

    /**
     * Register the addon.
     *
     * @param EloquentModel      $model
     * @param EloquentCollection $collection
     */
    public function register(EloquentModel $model, EloquentCollection $collection)
    {
        $collection->bind(
            'shippables',
            function () {

                /* @var Collection $this */
                return new ShippableCollection(
                    $this->filter(
                        function ($item) {

                            /* @var EloquentModel $item */
                            return $item->shippable;
                        }
                    )->all()
                );
            }
        );

        $model->bind(
            'shippable',
            function () {

                /* @var EloquentModel $this */
                return $this->morphOne(ShippableModel::class, 'item', 'item_type');
            }
        );

        $model->bind(
            'get_shippable',
            function () {

                /* @var EloquentModel $this */
                return $this->shippable()->first();
            }
        );

        $model->bind(
            'get_shippable_weight',
            function () {

                /* @var EloquentModel $this */
                return $this->weight;
            }
        );

        $model->bind(
            'get_shippable_length',
            function () {

                /* @var EloquentModel $this */
                return $this->length;
            }
        );

        $model->bind(
            'get_shippable_height',
            function () {

                /* @var EloquentModel $this */
                return $this->height;
            }
        );

        $model->bind(
            'get_shippable_width',
            function () {

                /* @var EloquentModel $this */
                return $this->width;
            }
        );
    }
}
