<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Carrier\CarrierExtension;
use Anomaly\ShippingModule\Rate\Contract\RateInterface;
use Anomaly\ShippingModule\Rate\Contract\RateRepositoryInterface;
use Anomaly\ShippingModule\Rate\Form\RateCarrierFormBuilder;
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
     * @param RateCarrierFormBuilder $form
     * @param RateFormBuilder        $rate
     * @param ExtensionCollection    $extensions
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function create(RateCarrierFormBuilder $form, RateFormBuilder $rate, ExtensionCollection $extensions)
    {
        /* @var CarrierExtension $carrier */
        $carrier = $extensions->get($this->request->get('carrier'));

        $form->addForm('rate', $rate->setCarrier($carrier));

        $carrier->integrate($form);

        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RateCarrierFormBuilder $form
     * @param RateFormBuilder        $rate
     * @param                        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RateCarrierFormBuilder $form, RateFormBuilder $rate, RateRepositoryInterface $rates, $id)
    {
        /* @var RateInterface $entry */
        $entry = $rates->find($id);

        $form->addForm('rate', $rate->setEntry($entry)->setCarrier($carrier = $entry->getCarrier()));

        $carrier->integrate($form);

        return $form->render();
    }
}
