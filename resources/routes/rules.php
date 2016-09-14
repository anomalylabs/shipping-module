<?php

return [
    'admin/shipping/methods/{method}/rules'           => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@index',
    'admin/shipping/methods/{method}/rules/create'    => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@create',
    'admin/shipping/methods/{method}/rules/edit/{id}' => 'Anomaly\ShippingModule\Http\Controller\Admin\RulesController@edit',
];
