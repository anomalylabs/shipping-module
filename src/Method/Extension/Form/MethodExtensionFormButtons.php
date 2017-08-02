<?php namespace Anomaly\ShippingModule\Method\Extension\Form;

/**
 * Class MethodExtensionFormButtons
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MethodExtensionFormButtons
{

    /**
     * Handle the buttons.
     *
     * @param MethodExtensionFormBuilder $builder
     */
    public function handle(MethodExtensionFormBuilder $builder)
    {
        $builder->setButtons(
            [
                'cancel',
                'rules' => [
                    'enabled' => 'edit',
                    'icon'    => 'wrench',
                    'type'    => 'primary',
                    'href'    => '/admin/shipping/methods/' . $builder->getChildFormEntryId('method') . '/rules',
                ],
            ]
        );
    }
}
