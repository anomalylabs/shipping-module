<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Rate\Form\RateFormBuilder;
use Anomaly\ShippingModule\Rate\Table\RateTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class RatesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param RateTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RateTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param RateFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(RateFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RateFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RateFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
