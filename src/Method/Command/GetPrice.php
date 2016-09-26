<?php namespace Anomaly\ShippingModule\Method\Command;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface;
use Anomaly\ShippingModule\Rule\RuleCalculator;

/**
 * Class GetPrice
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetPrice
{

    /**
     * The shipping group.
     *
     * @var GroupInterface
     */
    protected $group;

    /**
     * The shipping method.
     *
     * @var MethodInterface
     */
    protected $method;

    /**
     * The shipping quote.
     *
     * @var float
     */
    protected $quote;

    /**
     * Create a new GetPrice instance.
     *
     * @param MethodInterface $method
     * @param GroupInterface  $group
     * @param float           $quote
     */
    public function __construct(MethodInterface $method, GroupInterface $group, $quote)
    {
        $this->group  = $group;
        $this->quote  = $quote;
        $this->method = $method;
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
        if (!$rule = $rules->findByMethodAndGroup($this->method, $this->group)) {
            return $this->quote;
        }

        return $calculator->apply($rule, $this->quote);
    }
}
