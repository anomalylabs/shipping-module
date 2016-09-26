<?php namespace Anomaly\ShippingModule\Shippable\Contract;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
     * Get the related group.
     *
     * @return GroupInterface
     */
    public function getGroup();

    /**
     * Return the group relation.
     *
     * @return BelongsTo
     */
    public function group();
}
