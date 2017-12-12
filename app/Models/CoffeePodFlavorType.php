<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeePodFlavorType
 * @package App\Models
 *
 * Fillable
 * @property $description
 */
class CoffeePodFlavorType extends Model
{
    CONST DESCRIPTION = 'description';

    protected $fillable = [
        self::DESCRIPTION,
    ];
    protected $table = 'coffee_pod_flavor_type';

    public $timestamps = false;
}