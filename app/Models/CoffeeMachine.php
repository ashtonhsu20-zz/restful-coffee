<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeeMachine
 * @package App\Models
 *
 * Fillable
 * @property $sku
 * @property $product_type
 * @property $water_line
 */
class CoffeeMachine extends Model
{
    use SoftDeletes;

    CONST SKU = 'sku';
    CONST PRODUCT_TYPE_ID = 'product_type_id';
    CONST WATER_LINE = 'water_line';

    protected $fillable = [
        self::SKU,
        self::PRODUCT_TYPE_ID,
        self::WATER_LINE
    ];
    protected $hidden = [
        'id',
        self::PRODUCT_TYPE_ID,
        self::WATER_LINE,
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $table = 'coffee_machines';

    public $timestamps = TRUE;

    public function product_type()
    {
        return $this->belongsTo(CoffeePodProductType::class);
    }
}