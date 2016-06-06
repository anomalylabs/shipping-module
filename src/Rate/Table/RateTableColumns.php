<?php namespace Anomaly\ShippingModule\Rate\Table;

use Anomaly\ShippingModule\Rate\Contract\RateInterface;
use Illuminate\Contracts\Config\Repository;

/**
 * Class RateTableColumns
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Rate\Table
 */
class RateTableColumns
{

    /**
     * Handle the columns.
     *
     * @param RateTableBuilder $builder
     * @param Repository       $config
     */
    public function handle(RateTableBuilder $builder, Repository $config)
    {
        $currency = $config->get('streams::currencies.default');
        $symbol   = $config->get('streams::currencies.supported.' . $currency . '.symbol');

        $builder->setColumns(
            [
                'name',
                'zone',
                'entry.carrier.title',
                'condition' => [
                    'value' => function (RateInterface $entry) use ($symbol, $currency) {

                        $type = $entry->getType();
                        $min  = $entry->getMinUnit();
                        $max  = $entry->getMaxUnit();

                        $prefix = $type == 'price' ? $symbol : null;
                        $suffix = $type == 'price' ? $currency : 'lbs';

                        return $prefix . $min . ' - ' . $prefix . $max . ' ' . $suffix;
                    }
                ],
            ]
        );
    }
}
