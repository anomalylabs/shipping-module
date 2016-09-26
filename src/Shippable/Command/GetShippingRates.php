<?php namespace Anomaly\ShippingModule\Shippable\Command;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Shipping\ShippingResolver;

/**
 * Class GetShippingRates
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetShippingRates
{

    /**
     * The shipping group.
     *
     * @var GroupInterface
     */
    protected $group;

    /**
     * The zone parameters.
     *
     * @var array
     */
    private $parameters;

    /**
     * Create a new GetShippingRates instance.
     *
     * @param GroupInterface $group
     * @param array          $parameters
     */
    public function __construct(GroupInterface $group, array $parameters = [])
    {
        $this->group      = $group;
        $this->parameters = $parameters;
    }

    /**
     * Handle the command.
     *
     * @param ShippingResolver $resolver
     * @return MethodCollection
     */
    public function handle(ShippingResolver $resolver)
    {
        return $resolver->resolve($this->group, $this->parameters);
    }
}
