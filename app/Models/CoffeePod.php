<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeePod
 * @package App\Models
 *
 * Fillable
 * @property $sku
 * @property $product_type_id
 * @property $flavor_type_id
 * @property $size
 */
class CoffeePod extends Model
{
    use SoftDeletes;

    CONST SKU = 'sku';
    CONST PRODUCT_TYPE_ID = 'product_type_id';
    CONST COFFEE_FLAVOR_ID = 'flavor_type_id';
    CONST SIZE = 'size';

    protected $fillable = [
        self::SKU,
        self::PRODUCT_TYPE_ID,
        self::COFFEE_FLAVOR_ID,
        self::SIZE,
    ];

    protected $hidden = [
        'id',
        self::PRODUCT_TYPE_ID,
        self::COFFEE_FLAVOR_ID,
        self::SIZE,
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $table = 'coffee_pods';

    public $timestamps = TRUE;
}