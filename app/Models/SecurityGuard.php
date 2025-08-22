<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SecurityGuard extends Model
{
    use HasFactory;

    protected $fillable = [
        'guard_id',
        'name',
        'last_name',
        'gender',
        'birth_date',
        'email',
        'password',
        'role'
    ];

    public function sanctions():HasMany{

        return $this->hasMany(Sanction::class);

    }
}
