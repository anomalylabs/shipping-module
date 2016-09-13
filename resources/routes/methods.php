<?php

return [
    'admin/shipping/methods/{zone}'           => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@index',
    'admin/shipping/methods/{zone}/choose'    => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@choose',
    'admin/shipping/methods/{zone}/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@create',
    'admin/shipping/methods/{zone}/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\MethodsController@edit',
];
