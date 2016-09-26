<?php namespace Anomaly\ShippingModule\Shippable\Command;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;
use Anomaly\ShippingModule\Shipping\ShippingCollection;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class GetShippingOptions
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetShippingOptions
{

    use DispatchesJobs;

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
     * Create a new GetShippingOptions instance.
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
     * @return ShippingCollection
     */
    public function handle()
    {
        $methods = $this->dispatch(new GetShippingRates($this->shippable, $this->parameters));

        return new ShippingCollection(
            $methods->map(
                function ($method) {

                    /* @var MethodInterface $method */
                    $quote      = $method->quote($this->shippable, $this->parameters);
                    $price      = $method->price($this->shippable, $this->parameters);
                    $adjustment = $method->adjustment($this->shippable, $this->parameters);

                    return array_merge($method->toArray(), compact('quote', 'price', 'adjustment'));
                }
            )->all()
        );
    }
}
