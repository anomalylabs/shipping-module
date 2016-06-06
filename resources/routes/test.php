<?php

return [
    'admin/shipping/test' => function (\Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection $extensions) {
        $extensions['anomaly.extension.ups_shipping_calculator']->quote();
    }
];