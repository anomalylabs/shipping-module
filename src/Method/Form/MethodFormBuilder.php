<?php namespace Anomaly\ShippingModule\Method\Form;

use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class MethodFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Method\Form
 */
class MethodFormBuilder extends FormBuilder
{

    /**
     * The method extension.
     *
     * @var null|MethodExtension
     */
    protected $extension = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'extension',
        'zone',
    ];

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        if ($extension = $this->getExtension()) {

            $entry = $this->getFormEntry();

            $entry->setAttribute('extension', $extension);
        }
    }

    /**
     * Get the extension.
     *
     * @return MethodExtension|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param MethodExtension $extension
     * @return $this
     */
    public function setExtension(MethodExtension $extension)
    {
        $this->extension = $extension;

        return $this;
    }
}
