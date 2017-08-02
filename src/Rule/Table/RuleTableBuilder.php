<?php namespace Anomaly\ShippingModule\Rule\Table;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class RuleTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class RuleTableBuilder extends TableBuilder
{

    /**
     * The method instance.
     *
     * @var null|MethodInterface
     */
    protected $method = null;

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'group',
        'adjustment',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
    ];

    /**
     * Fired just before querying.
     *
     * @param Builder $query
     */
    public function onQuerying(Builder $query)
    {
        if ($method = $this->getMethod()) {
            $query->where('method_id', $method->getId());
        }
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
