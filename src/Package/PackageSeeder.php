<?php namespace Anomaly\ShippingModule\Package;

use Anomaly\ShippingModule\Package\Contract\PackageRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class PackageSeeder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Package
 */
class PackageSeeder extends Seeder
{

    /**
     * The package repository.
     *
     * @var PackageRepositoryInterface
     */
    protected $packages;

    /**
     * Create a new PackageSeeder instance.
     *
     * @param PackageRepositoryInterface $packages
     */
    public function __construct(PackageRepositoryInterface $packages)
    {
        parent::__construct();

        $this->packages = $packages;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->packages->create(
            [
                'en'      => [
                    'name' => 'Sample box'
                ],
                'type'    => 'package',
                'default' => true,
                'length'  => 12,
                'width'   => 8.75,
                'height'  => 6,
            ]
        );
    }
}
