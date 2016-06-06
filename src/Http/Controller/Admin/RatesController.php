<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Rate\Form\RateFormBuilder;
use Anomaly\ShippingModule\Rate\Table\RateTableBuilder;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class RatesController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Http\Controller\Admin
 */
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
     * Choose a country.
     *
     * @param ExtensionCollection $extensions
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(ExtensionCollection $extensions)
    {
        $carriers = $extensions->search('anomaly.module.shipping::carrier.*');

        return $this->view->make('module::admin/rates/choose', compact('carriers'));
    }

    /**
     * Create a new entry.
     *
     * @param RateFormBuilder     $form
     * @param ExtensionCollection $extensions
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(RateFormBuilder $form, ExtensionCollection $extensions)
    {
        $carrier = $extensions->get($this->request->get('carrier'));

        return $form
            ->setCarrier($carrier)
            ->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RateFormBuilder $form
     * @param                 $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RateFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
