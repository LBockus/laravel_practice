<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property  int $country_id
 * @property string $city
 * @property string $street
 * @property Carbon @created_at
 * @property Carbon @updated_at
 */

class Address extends Model
{
    use HasFactory;
}
