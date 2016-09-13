<?php

return [
    'admin/shipping/rules/{method}' => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@index',
    'admin/shipping/rules/{method}/create' => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@create',
    'admin/shipping/rules/{method}/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@edit'
];
