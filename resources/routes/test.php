<?php

return [
    'admin/shipping/test' => function (
        \Anomaly\ShippingModule\Rate\Contract\RateRepositoryInterface $rates,
        \Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection $extensions,
        \Anomaly\ShippingModule\Package\Contract\PackageRepositoryInterface $packages
    ) {
        dd(
            $extensions['anomaly.extension.generic_shipping_carrier']->setRate($rates->first())->getPrice(
                new \Anomaly\ShippingModule\Carrier\Test\ShippableTest(
                    [
                        'business'    => 'PyroCMS',
                        'postal_code' => '61241',
                    ],
                    [
                        'business'    => 'Example Business',
                        'postal_code' => '90210',
                    ],
                    new \Anomaly\ShippingModule\Package\PackageCollection(
                        [
                            $packages->findDefault()->setWeight(2)
                        ]
                    )
                )
            )
        );
    }
];
