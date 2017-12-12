<?php

namespace App\DomainModels;

use App\Repositories\CoffeeMachineRepository;

/**
 * Class CoffeeMachineDomain
 * @package App\DomainModels
 */
class CoffeeMachineDomain
{
    /**
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCoffeeMachines($params = [])
    {
        return CoffeeMachineRepository::getCoffeeMachines($params);
    }
}
