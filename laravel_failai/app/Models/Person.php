<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $address_id
 * @property int $order_id
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Person extends Model
{
    use HasFactory;
}
