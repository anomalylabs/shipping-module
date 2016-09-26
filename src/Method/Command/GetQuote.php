<?php namespace Anomaly\ShippingModule\Method\Command;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Shippable\Contract\ShippableInterface;

/**
 * Class GetQuote
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetQuote
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
     * The quote parameters.
     *
     * @var array
     */
    protected $parameters;

    /**
     * Create a new GetQuote instance.
     *
     * @param MethodInterface    $method
     * @param ShippableInterface $shippable
     * @param array              $parameters
     */
    public function __construct(MethodInterface $method, ShippableInterface $shippable, array $parameters)
    {
        $this->method     = $method;
        $this->shippable  = $shippable;
        $this->parameters = $parameters;
    }

    /**
     * Handle the command.
     *
     * @throws \Exception
     */
    public function handle()
    {
        return $this->method
            ->extension()
            ->quote($this->shippable, $this->parameters);
    }
}
