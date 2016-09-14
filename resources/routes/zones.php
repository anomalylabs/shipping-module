<?php

return [
    'admin/shipping'           => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@index',
    'admin/shipping/choose'    => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@choose',
    'admin/shipping/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@create',
    'admin/shipping/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@edit',
];
