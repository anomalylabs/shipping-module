<?php namespace Anomaly\ShippingModule\Method\Extension\Command;

use Anomaly\ConfigurationModule\Configuration\Form\ConfigurationFormBuilder;
use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Extension\Form\MethodExtensionFormBuilder;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\ShippingModule\Method\Form\MethodFormBuilder;


/**
 * Class GetFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Extension\Command
 */
class GetFormBuilder
{

    /**
     * The method instance.
     *
     * @var MethodInterface
     */
    protected $method;

    /**
     * The method extension.
     *
     * @var MethodExtension
     */
    protected $extension;

    /**
     * Create a new GetFormBuilder instance.
     *
     * @param MethodExtension $extension
     * @param MethodInterface $method
     */
    public function __construct(MethodExtension $extension, MethodInterface $method = null)
    {
        $this->method    = $method;
        $this->extension = $extension;
    }

    /**
     * Handle the command.
     *
     * @param MethodExtensionFormBuilder $builder
     * @param ConfigurationFormBuilder $configuration
     * @param MethodFormBuilder $method
     * @return MethodExtensionFormBuilder
     */
    public function handle(
        MethodExtensionFormBuilder $builder,
        ConfigurationFormBuilder $configuration,
        MethodFormBuilder $method
    ) {
        $builder->addForm(
            'method',
            $method
                ->setEntry($this->method)
                ->setExtension($this->extension)
        );

        $builder->addForm(
            'configuration',
            $configuration
                ->setEntry($this->extension->getNamespace())
                ->setScope($this->method ? $this->method->getId() : null)
        );

        return $builder;
    }
}
