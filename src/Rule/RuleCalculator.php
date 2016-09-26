<?php namespace Anomaly\ShippingModule\Rule;

use Anomaly\ShippingModule\Rule\Contract\RuleInterface;

class RuleCalculator
{

    /**
     * The value utility.
     *
     * @var RuleValue
     */
    protected $value;

    /**
     * Create a new RuleCalculator instance.
     *
     * @param RuleValue $value
     */
    public function __construct(RuleValue $value)
    {
        $this->value = $value;
    }

    /**
     * Calculate the rule adjustment.
     *
     * @param RuleInterface $rule
     * @param               $value
     * @return float
     */
    public function calculate(RuleInterface $rule, $value)
    {
        $modification = $rule->getAdjustment();

        $delta = $this->value->clean($modification);

        if ($this->value->isPercentage($modification)) {
            $delta = floatval($value * ($delta / 100));
        }

        return floatval($delta);
    }

    /**
     * Apply the rule adjustment.
     *
     * @param RuleInterface $rule
     * @param               $value
     * @return float
     */
    public function apply(RuleInterface $rule, $value)
    {
        $modification = $rule->getAdjustment();

        $delta = $this->value->clean($modification);

        if ($this->value->isPercentage($modification)) {
            if ($this->value->isSubtraction($modification)) {
                $result = floatval($value - ($value * ($delta / 100)));
            } else {
                $result = floatval($value + ($value * ($delta / 100)));
            }
        } else {
            if ($this->value->isSubtraction($modification)) {
                $result = floatval($value - $delta);
            } else {
                $result = floatval($value + $delta);
            }
        }

        return $result < 0 ? 0.00 : $result;
    }
}
