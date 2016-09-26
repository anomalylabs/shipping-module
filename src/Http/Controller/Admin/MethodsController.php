<?php namespace Anomaly\ShippingModule\Http\Controller\Admin;

use Anomaly\ShippingModule\Method\Contract\MethodInterface;
use Anomaly\ShippingModule\Method\Contract\MethodRepositoryInterface;
use Anomaly\ShippingModule\Method\Extension\MethodExtension;
use Anomaly\ShippingModule\Method\Form\MethodFormBuilder;
use Anomaly\ShippingModule\Method\Table\MethodTableBuilder;
use Anomaly\ShippingModule\Zone\Contract\ZoneInterface;
use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class MethodsController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class MethodsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MethodTableBuilder      $table
     * @param ZoneRepositoryInterface $zones
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MethodTableBuilder $table, ZoneRepositoryInterface $zones)
    {
        /* @var ZoneInterface $zone */
        $zone = $zones->find($this->route->getParameter('zone'));

        return $table->setZone($zone)->render();
    }

    /**
     * Return the ajax to choose method type.
     *
     * @param ExtensionCollection $extensions
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(ExtensionCollection $extensions)
    {
        return $this->view->make(
            'anomaly.module.shipping::admin/methods/choose',
            [
                'methods' => $extensions->search('anomaly.module.shipping::method.*'),
            ]
        );
    }

    /**
     * Create a new entry.
     *
     * @param ExtensionCollection     $extensions
     * @param ZoneRepositoryInterface $zones
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param MethodFormBuilder $form
     */
    public function create(ExtensionCollection $extensions, ZoneRepositoryInterface $zones)
    {
        /* @var MethodExtension $extension */
        $extension = $extensions->get($this->request->get('method'));

        /* @var ZoneInterface $zone */
        $zone = $zones->find($this->route->getParameter('zone'));

        return $extension
            ->form()
            ->setZone($zone)
            ->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MethodFormBuilder $form
     * @param                   $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MethodRepositoryInterface $methods)
    {
        /* @var MethodInterface $method */
        $method = $methods->find($this->route->getParameter('id'));

        return $method
            ->extension()
            ->form()
            ->render();
    }
}
