<?php namespace Anomaly\ShippingModule;

use Anomaly\ShippingModule\Group\Contract\GroupRepositoryInterface;
use Anomaly\ShippingModule\Group\GroupRepository;
use Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface;
use Anomaly\ShippingModule\Method\MethodModel;
use Anomaly\ShippingModule\Method\MethodRepository;
use Anomaly\ShippingModule\Rule\Contract\RuleRepositoryInterface;
use Anomaly\ShippingModule\Rule\RuleRepository;
use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\ShippingModule\Zone\ZoneModel;
use Anomaly\ShippingModule\Zone\ZoneRepository;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\Shipping\ShippingMethodsEntryModel;
use Anomaly\Streams\Platform\Model\Shipping\ShippingZonesEntryModel;

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
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        ShippingModulePlugin::class,
    ];

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        ShippingZonesEntryModel::class   => ZoneModel::class,
        ShippingMethodsEntryModel::class => MethodModel::class,
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        RuleRepositoryInterface::class   => RuleRepository::class,
        ZoneRepositoryInterface::class   => ZoneRepository::class,
        GroupRepositoryInterface::class  => GroupRepository::class,
        MethodRepositoryInterface::class => MethodRepository::class,
    ];
}
