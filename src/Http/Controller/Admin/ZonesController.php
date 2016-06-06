<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Zone\Form\ZoneFormBuilder;
use Anomaly\ShippingModule\Zone\Table\ZoneTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Contracts\Config\Repository;

/**
 * Class ZonesController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Http\Controller\Admin
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
     * Choose a country.
     *
     * @param Repository $config
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(Repository $config)
    {
        $common    = $config->get('streams::countries.common');
        $countries = $config->get('streams::countries.available');

        return $this->view->make('module::admin/zones/choose', compact('common', 'countries'));
    }

    /**
     * Create a new entry.
     *
     * @param ZoneFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ZoneFormBuilder $form)
    {
        return $form
            ->setCountry($this->request->get('country'))
            ->render();
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
