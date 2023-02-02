<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * class Product
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property int $category_id
 * @property int $brand_id
 * @property string $color
 * @property string $size
 * @property float $price
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'color',
        'size',
        'price',
        'status'
    ];

    protected $guarded = [
        'category_id',
        'brand_id'
    ];
}
