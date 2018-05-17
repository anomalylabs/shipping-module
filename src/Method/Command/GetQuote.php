<?php namespace Anomaly\ShippingModule\Method\Command;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\StoreModule\Contract\AddressInterface;
use Anomaly\ShippingModule\Shipping\Contract\ShippableInterface;

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
     * The quote address.
     *
     * @var AddressInterface
     */
    protected $address;

    /**
     * Create a new GetQuote instance.
     *
     * @param MethodInterface $method
     * @param ShippableInterface $shippable
     * @param AddressInterface $address
     */
    public function __construct(MethodInterface $method, ShippableInterface $shippable, AddressInterface $address)
    {
        $this->method    = $method;
        $this->address   = $address;
        $this->shippable = $shippable;
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
            ->quote($this->shippable, $this->address);
    }
}
