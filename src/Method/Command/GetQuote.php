<?php namespace Anomaly\ShippingModule\Method\Command;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;

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
     * The quote parameters.
     *
     * @var array
     */
    protected $parameters;

    /**
     * Create a new GetQuote instance.
     *
     * @param MethodInterface $method
     * @param array           $parameters
     */
    public function __construct(MethodInterface $method, array $parameters)
    {
        $this->method     = $method;
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
            ->quote($this->parameters);
    }
}
