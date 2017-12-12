<?php

namespace App\Http\Controllers\Coffee;

use App\DomainModels\CoffeeMachineDomain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoffeeMachineController extends Controller
{
    /**
     * @SWG\Swagger(
     *   schemes={"http"},
     *   basePath="/api/v1"
     * )
     */

    /**
     * @SWG\Info(title="Restful Coffee API", version="0.1")
     */

    /**
     * @SWG\Get(
     *     path="/coffee_machines",
     *     description="List of coffee machines",
     *     @SWG\Parameter(
     *         description="filter by water line compatible",
     *         in="query",
     *         name="water_line",
     *         type="boolean"
     *     ),
     *     @SWG\Parameter(
     *         description="filter by product type",
     *         in="query",
     *         name="product",
     *         type="string",
     *         enum={"COFFEE_MACHINE_SMALL", "COFFEE_MACHINE_LARGE","ESPRESSO_MACHINE"},
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="array of coffee machine skus",
     *         @SWG\Schema(
     *          type="object",
     *              @SWG\Property(
     *                  property="sku",
     *                  type="string",
     *              ),
     *         )
     *    )
     * )
     */

    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function get(Request $request)
    {
        return CoffeeMachineDomain::getCoffeeMachines($request->query());
    }
}
