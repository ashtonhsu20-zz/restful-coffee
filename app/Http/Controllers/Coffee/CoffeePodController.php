<?php

namespace App\Http\Controllers\Coffee;

use App\DomainModels\CoffeePodDomain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoffeePodController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/coffee_pods",
     *     description="List of coffee pods",
     *     @SWG\Parameter(
     *         description="filter by product type",
     *         in="query",
     *         name="flavor",
     *         type="string",
     *         enum={"COFFEE_FLAVOR_VANILLA", "COFFEE_FLAVOR_CARAMEL","COFFEE_FLAVOR_PSL","COFFEE_FLAVOR_MOCHA","COFFEE_FLAVOR_HAZELNUT"},
     *     ),
     *     @SWG\Parameter(
     *         description="filter by product type",
     *         in="query",
     *         name="product",
     *         type="string",
     *         enum={"COFFEE_POD_SMALL", "COFFEE_POD_LARGE","ESPRESSO_POD"},
     *     ),
     *     @SWG\Parameter(
     *         description="filter by size",
     *         in="query",
     *         name="size",
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="array of coffee pods skus",
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
   public static function get(Request $request){
       return CoffeePodDomain::getCoffeePods($request->query());
   }
}
