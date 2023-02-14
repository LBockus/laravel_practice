<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class File
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $extension
 * @property string $size
 * @property string $url
 * @property int $model_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class File extends Model
{
    use HasFactory;
}
