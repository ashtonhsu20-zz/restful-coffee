<?php

namespace App\Http\Controllers\Coffee;

use App\DomainModels\CoffeePodDomain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoffeePodController extends Controller
{
   public static function get(Request $request){
       return CoffeePodDomain::getCoffeePods($request->query());
   }
}
