<?php namespace Anomaly\ShippingModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class ShippingModuleServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule
 */
class ShippingModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel' => 'Anomaly\ShippingModule\Method\MethodModel',
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface' => 'Anomaly\ShippingModule\Method\MethodRepository',
    ];
}
