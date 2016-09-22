<?php namespace Anomaly\ShippingModule\Method;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;

/**
 * Class GetRate
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetRate
{

    /**
     * The shipping method.
     *
     * @var MethodInterface
     */
    protected $method;

    /**
     * The quote parameters.
     *
     * @var array
     */
    protected $parameters;

    /**
     * Create a new GetRate instance.
     *
     * @param MethodInterface $method
     */
    public function __construct(MethodInterface $method, array $parameters)
    {
        $this->method     = $method;
        $this->parameters = $parameters;
    }

    public function handle()
    {
        $extension = $this->method->getExtension();

        $extension->rate($parameters);
    }
}
