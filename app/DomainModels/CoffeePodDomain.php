<?php

namespace App\DomainModels;

use App\Repositories\CoffeePodRepository;

/**
 * Class CoffeePodDomain
 * @package App\DomainModels
 */
class CoffeePodDomain
{
    /**
     * @param null $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCoffeePods($params = null)
    {
//        todo
        return CoffeePodRepository::getCoffeePods($params);
    }
}
