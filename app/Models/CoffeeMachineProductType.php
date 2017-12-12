<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeeMachineProductType
 * @package App\Models
 *
 * Fillable
 * @property $description
 */
class CoffeeMachineProductType extends Model
{
    CONST DESCRIPTION = 'description';

    protected $fillable = [
        self::DESCRIPTION,
    ];
    protected $table = 'coffee_machine_product_type';

    public $timestamps = false;
}