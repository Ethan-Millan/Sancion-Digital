<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'category',
        'description',
        'guard_id'
    ];

    public function securityGuard():HasOne{
        return $this->hasOne(SecurityGuard::class, 'guard_id'/*Forenkey de la tabla a relacionar */, 'guard_id'/*Primary key de la tabla principal  */);
    }
}
