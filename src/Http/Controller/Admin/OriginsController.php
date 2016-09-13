<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Origin\Form\OriginFormBuilder;
use Anomaly\ShippingModule\Origin\Table\OriginTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class OriginsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param OriginTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(OriginTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param OriginFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(OriginFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param OriginFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(OriginFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
