<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Shippable\Form\ShippableFormBuilder;
use Anomaly\ShippingModule\Shippable\Table\ShippableTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ShippablesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ShippableTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ShippableTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ShippableFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ShippableFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ShippableFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ShippableFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
