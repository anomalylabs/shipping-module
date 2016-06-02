<?php namespace Anomaly\ShippingModule\Zone\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface ZoneInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\ShippingModule\Zone\Contract
 */
interface ZoneInterface extends EntryInterface
{

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry();
}
