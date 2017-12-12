<?php

namespace App\Repositories;

use App\Models\CoffeePod;
use App\Models\CoffeePodFlavorType;
use App\Models\CoffeePodProductType;

/**
 * Class CoffeePodRepository
 * @package App\Repositories
 */
class CoffeePodRepository
{
    /**
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCoffeePods($params = [])
    {
        $coffeePods = CoffeePod::query();

        if (is_array($params)) {
            foreach ($params as $paramKey => $paramValue) {
                switch ($paramKey) {
                    case 'product':
                        $product_id = CoffeePodProductType::where(CoffeePodProductType::DESCRIPTION, $paramValue)->first();
                        $coffeePods->where(CoffeePod::PRODUCT_TYPE_ID, $product_id->id);
                        break;
                    case 'flavor':
                        $flavor_id = CoffeePodFlavorType::where(CoffeePodFlavorType::DESCRIPTION, $paramValue)->first();
                        $coffeePods->where(CoffeePod::COFFEE_FLAVOR_ID, $flavor_id->id);
                        break;
                    case 'size':
                        $coffeePods->where(CoffeePod::SIZE, $paramValue);
                        break;
                }
            }
        }

        return $coffeePods->get();
    }
}
