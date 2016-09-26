<?php namespace Anomaly\ShippingModule\Rule;

use Anomaly\ShippingModule\Rule\Contract\RuleInterface;
use Anomaly\Streams\Platform\Model\Shipping\ShippingRulesEntryModel;

/**
 * Class RuleModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RuleModel extends ShippingRulesEntryModel implements RuleInterface
{

    /**
     * Get the adjustment.
     *
     * @return string
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }
}
