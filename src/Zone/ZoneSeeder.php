<?php namespace Anomaly\ShippingModule\Zone;

use Anomaly\ShippingModule\Zone\Contract\ZoneRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Illuminate\Contracts\Config\Repository;

/**
 * Class ZoneSeeder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Zone
 */
class ZoneSeeder extends Seeder
{

    /**
     * The zone repository.
     *
     * @var ZoneRepositoryInterface
     */
    protected $zones;

    /**
     * The config repository.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Create a new ZoneSeeder instance.
     *
     * @param ZoneRepositoryInterface $zones
     * @param Repository              $config
     */
    public function __construct(ZoneRepositoryInterface $zones, Repository $config)
    {
        parent::__construct();

        $this->zones  = $zones;
        $this->config = $config;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->zones->create(
            [
                'en'      => [
                    'name' => 'United States'
                ],
                'country' => 'US',
                'states'  => array_keys($this->config->get('streams::states/US.available'))
            ]
        );
    }
}
