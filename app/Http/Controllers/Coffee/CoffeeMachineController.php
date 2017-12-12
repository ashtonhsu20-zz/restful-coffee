<?php

namespace App\Http\Controllers\Coffee;

use App\DomainModels\CoffeeMachineDomain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoffeeMachineController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function get(Request $request)
    {
        return CoffeeMachineDomain::getCoffeeMachines($request->query());
    }
}
