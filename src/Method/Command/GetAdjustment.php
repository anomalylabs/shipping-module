<?php namespace Anomaly\ShippingModule\Method\Command;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface;
use Anomaly\ShippingModule\Rule\RuleCalculator;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;

/**
 * Class GetAdjustment
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetAdjustment
{

    /**
     * The shipping method.
     *
     * @var MethodInterface
     */
    protected $method;

    /**
     * The shippable instance.
     *
     * @var ShippableInterface
     */
    protected $shippable;

    /**
     * The shipping quote.
     *
     * @var float
     */
    protected $quote;

    /**
     * Create a new GetAdjustment instance.
     *
     * @param MethodInterface    $method
     * @param ShippableInterface $shippable
     * @param float              $quote
     */
    public function __construct(MethodInterface $method, ShippableInterface $shippable, $quote)
    {
        $this->quote     = $quote;
        $this->method    = $method;
        $this->shippable = $shippable;
    }

    /**
     * Handle the command.
     *
     * @param RuleRepositoryInterface $rules
     * @param RuleCalculator          $calculator
     * @return float
     */
    public function handle(RuleRepositoryInterface $rules, RuleCalculator $calculator)
    {
        if (!$rule = $rules->findByMethodAndGroup($this->method, $this->shippable->getGroup())) {
            return $this->quote;
        }

        return $calculator->calculate($rule, $this->quote);
    }
}
