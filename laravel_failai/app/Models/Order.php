<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Order extends Model
{
    use HasFactory;
}
