<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoffeePodProductType
 * @package App\Models
 *
 * Fillable
 * @property $description
 */
class CoffeePodProductType extends Model
{
    CONST DESCRIPTION = 'description';

    protected $fillable = [
        self::DESCRIPTION,
    ];
    protected $table = 'coffee_pod_product_type';

    public $timestamps = false;
}