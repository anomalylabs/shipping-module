<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface;
use Anomaly\ShippingModule\Rule\Form\RuleFormBuilder;
use Anomaly\ShippingModule\Rule\Table\RuleTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class RulesController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class RulesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param RuleTableBuilder $table
     * @param MethodRepositoryInterface $methods
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RuleTableBuilder $table, MethodRepositoryInterface $methods)
    {
        /* @var MethodInterface $method */
        if ($method = $methods->find($this->route->parameter('method'))) {
            $table->setMethod($method);
        }

        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param RuleFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(RuleFormBuilder $form, MethodRepositoryInterface $methods)
    {
        /* @var MethodInterface $method */
        if ($method = $methods->find($this->route->parameter('method'))) {
            $form->setMethod($method);
        }

        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RuleFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RuleFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
