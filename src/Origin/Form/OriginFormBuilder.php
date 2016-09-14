<?php namespace Anomaly\ShippingModule\Origin\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class OriginFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class OriginFormBuilder extends FormBuilder
{

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'general' => [
            'fields' => [
                'name',
            ],
        ],
        'contact' => [
            'fields' => [
                'business',
                'email',
                'phone',
            ],
        ],
        'address' => [
            'fields' => [
                'address1',
                'address2',
                'city',
                'state',
                'postal_code',
                'country',
            ],
        ],
    ];
}
