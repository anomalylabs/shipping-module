<?php

return [
    'admin/shipping'           => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@index',
    'admin/shipping/choose'    => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@choose',
    'admin/shipping/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@create',
    'admin/shipping/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@edit'
];
