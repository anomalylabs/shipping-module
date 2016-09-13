<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Zone\Form\ZoneFormBuilder;
use Anomaly\ShippingModule\Zone\Table\ZoneTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ZonesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ZoneTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ZoneTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ZoneFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ZoneFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ZoneFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ZoneFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
