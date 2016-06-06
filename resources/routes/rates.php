<?php

return [
    'admin/shipping'           => 'Anomaly\ShippingModule\Http\Controller\Admin\RatesController@index',
    'admin/shipping/choose'    => 'Anomaly\ShippingModule\Http\Controller\Admin\RatesController@choose',
    'admin/shipping/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\RatesController@create',
    'admin/shipping/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\RatesController@edit'
];
