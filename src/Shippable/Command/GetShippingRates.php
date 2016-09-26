<?php namespace Anomaly\ShippingModule\Shippable\Command;

use Anomaly\ShippingModule\Method\MethodCollection;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
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
     * The shippable interface.
     *
     * @var ShippableInterface
     */
    protected $shippable;

    /**
     * The zone parameters.
     *
     * @var array
     */
    private $parameters;

    /**
     * Create a new GetShippingRates instance.
     *
     * @param ShippableInterface $shippable
     * @param array              $parameters
     */
    public function __construct(ShippableInterface $shippable, array $parameters = [])
    {
        $this->shippable  = $shippable;
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
        return $resolver->resolve($this->shippable->getGroup(), $this->parameters);
    }
}
