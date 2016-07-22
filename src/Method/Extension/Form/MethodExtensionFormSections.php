<?php namespace Anomaly\ShippingModule\Method\Extension\Form;

/**
 * Class MethodExtensionFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Extension\Form
 */
class MethodExtensionFormSections
{

    /**
     * Handle the command.
     *
     * @param MethodExtensionFormBuilder $builder
     */
    public function handle(MethodExtensionFormBuilder $builder)
    {
        $method        = $builder->getChildFormFieldSlugs('method', 'method_');
        $configuration = $builder->getChildFormFieldSlugs('configuration', 'configuration_');

        $builder->setSections(
            [
                'method'        => [
                    'fields' => $method,
                ],
                'configuration' => [
                    'fields' => $configuration,
                ]
            ]
        );
    }
}
