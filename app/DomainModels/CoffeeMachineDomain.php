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
     * @param null $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCoffeeMachines($params = [])
    {
//        todo
        return CoffeeMachineRepository::getCoffeeMachines($params);
    }
}
