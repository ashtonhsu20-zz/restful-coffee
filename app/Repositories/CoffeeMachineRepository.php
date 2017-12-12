<?php

namespace App\Repositories;

use App\Models\CoffeeMachine;
use App\Models\CoffeeMachineProductType;

/**
 * Class CoffeeMachineRepository
 * @package App\Repositories
 *
 */
class CoffeeMachineRepository
{
    /**
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCoffeeMachines($params = [])
    {
        $coffeeMachines = CoffeeMachine::query();

        if (is_array($params)) {
            foreach ($params as $paramKey => $paramValue) {
                switch ($paramKey) {
                    case 'product':
                        $product_id = CoffeeMachineProductType::where(CoffeeMachineProductType::DESCRIPTION, $paramValue)->first();
                        $coffeeMachines->where(CoffeeMachine::PRODUCT_TYPE_ID, $product_id->id);
                        break;
                    case 'water_line':
                        $coffeeMachines->where(CoffeeMachine::WATER_LINE, (int)($paramValue === 'true'));
                        break;
                }
            }
        }

        return $coffeeMachines->get();
    }
}
