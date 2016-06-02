<?php

return [
    'admin/shipping/zones'           => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@index',
    'admin/shipping/zones/choose'    => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@choose',
    'admin/shipping/zones/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@create',
    'admin/shipping/zones/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\ZonesController@edit'
];
