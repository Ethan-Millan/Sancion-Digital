<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function guard():BelongsTo{
        return $this->belongsTo(SecurityGuard::class);

    }
}
