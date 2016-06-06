<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Package\Form\PackageFormBuilder;
use Anomaly\ShippingModule\Package\Table\PackageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PackagesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PackageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PackageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PackageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PackageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PackageFormBuilder $form
     * @param                    $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PackageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
