<?php namespace Anomaly\ShippingModule\Shippable\Contract;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Origin\Contract\OriginInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Interface ShippableInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface ShippableInterface extends EntryInterface
{

    /**
     * Return the available shipping methods.
     *
     * @param array $parameters
     * @return MethodCollection
     */
    public function methods();

    /**
     * Return whether the item
     * has dimensions or not.
     *
     * @return bool
     */
    public function itemHasDimensions();

    /**
     * Return the item length.
     *
     * @return float|null
     */
    public function getItemLength();

    /**
     * Return the item width.
     *
     * @return float|null
     */
    public function getItemWidth();

    /**
     * Return the item height.
     *
     * @return float|null
     */
    public function getItemHeight();

    /**
     * Return the item weight.
     *
     * @return float|null
     */
    public function getItemWeight();

    /**
     * Get the related item.
     *
     * @return EloquentModel
     */
    public function getItem();

    /**
     * Return the item relation.
     *
     * @return MorphTo
     */
    public function item();

    /**
     * Get the related group.
     *
     * @return GroupInterface
     */
    public function getGroup();

    /**
     * Get the related group ID.
     *
     * @return int
     */
    public function getGroupId();

    /**
     * Return the group relation.
     *
     * @return BelongsTo
     */
    public function group();

    /**
     * Get the related origin.
     *
     * @return OriginInterface
     */
    public function getOrigin();

    /**
     * Return the origin relation.
     *
     * @return BelongsTo
     */
    public function origin();
}
