<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $personal_code
 * @property string $email
 * @property string $phone
 * @property int $user_id
 * @property int $address_id
 * @property string $created_at
 * @property string $updated_at
 */
class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'personal_code',
        'email',
        'phone',
        'user_id',
        'address_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
