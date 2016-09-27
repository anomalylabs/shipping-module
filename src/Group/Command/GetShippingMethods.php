<?php namespace Anomaly\ShippingModule\Group\Command;

use Anomaly\ShippingModule\Group\Contract\GroupInterface;
use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Shippable\ShippableResolver;

/**
 * Class GetShippingMethods
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetShippingMethods
{

    /**
     * The group interface.
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
     * Create a new GetShippingMethods instance.
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
     * @param ShippableResolver $resolver
     * @return MethodCollection
     */
    public function handle(ShippableResolver $resolver)
    {
        return $resolver->resolve($this->group, $this->parameters);
    }
}
