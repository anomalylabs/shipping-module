<?php namespace Anomaly\ShippingModule\Rate\Form;

use Anomaly\PostsModule\Entry\Form\EntryFormBuilder;

/**
 * Class RateCarrierFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate\Form
 */
class RateCarrierFormSections
{

    /**
     * Handle the command.
     *
     * @param RateCarrierFormBuilder $builder
     */
    public function handle(RateCarrierFormBuilder $builder)
    {
        $builder->setSections([]);

        /* @var RateFormBuilder $rateForm */
        /* @var EntryFormBuilder $carrierForm */
        $rateForm    = $builder->getChildForm('rate');
        $carrierForm = $builder->getChildForm('carrier');

        $builder->addSection(
            'rate',
            [
                'title'   => 'Rate',
                'context' => 'info',
                'fields'  => function () use ($rateForm) {
                    return $rateForm->getFormFieldSlugs('rate_');
                }
            ]
        );

        if ($carrierForm) {
            $builder->addSection(
                'carrier',
                [
                    'title'   => 'Carrier',
                    'context' => 'info',
                    'fields'  => function () use ($carrierForm) {
                        return $carrierForm->getFormFieldSlugs('carrier_');
                    }
                ]
            );
        }
    }
}
