<?php namespace Anomaly\ShippingModule\Rule;

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
     * @return float
     */
    public function calculate()
    {
        $modification = $this->modifier->getValue();

        $delta = $value->clean($modification);

        if ($value->isPercentage($modification)) {
            if ($value->isSubtraction($modification)) {
                $result = floatval($this->value - ($this->value * ($delta / 100)));
            } else {
                $result = floatval($this->value + ($this->value * ($delta / 100)));
            }
        } else {
            if ($value->isSubtraction($modification)) {
                $result = floatval($this->value - $delta);
            } else {
                $result = floatval($this->value + $delta);
            }
        }

        return $result < 0 ? 0.00 : $result;
    }
}
