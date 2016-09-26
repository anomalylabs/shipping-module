<?php namespace Anomaly\ShippingModule\Rule\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface RuleInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface RuleInterface extends EntryInterface
{

    /**
     * Get the adjustment.
     *
     * @return string
     */
    public function getAdjustment();
}
