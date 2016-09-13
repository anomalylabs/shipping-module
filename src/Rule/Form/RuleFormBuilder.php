<?php namespace Anomaly\ShippingModule\Rule\Form;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class RuleFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class RuleFormBuilder extends FormBuilder
{

    /**
     * The method instance.
     *
     * @var null|MethodInterface
     */
    protected $method = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'method',
    ];

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $entry = $this->getFormEntry();

        $entry->setAttribute('method', $this->getMethod());
    }

    /**
     * Get the method.
     *
     * @return MethodInterface|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the method.
     *
     * @param MethodInterface $method
     * @return $this
     */
    public function setMethod(MethodInterface $method)
    {
        $this->method = $method;

        return $this;
    }
}
