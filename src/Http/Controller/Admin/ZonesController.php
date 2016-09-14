<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\ShippingModule\Zone\Form\ZoneFormBuilder;
use Anomaly\ShippingModule\Zone\Table\ZoneTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class ZonesController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
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
     * Return the modal to choose a zone.
     *
     * @param ZoneRepositoryInterface $zones
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(ZoneRepositoryInterface $zones)
    {
        return $this->view->make(
            'anomaly.module.shipping::admin/zones/choose',
            [
                'zones' => $zones->all(),
            ]
        );
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
     * @param                 $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ZoneFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
