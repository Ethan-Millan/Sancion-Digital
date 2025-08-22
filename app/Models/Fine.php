<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fine extends Model
{
    use HasFactory;

    protected $fillable = [
        'fine_name',
        'service_time'
    ];

    public function sanctions():BelongsTo{

        return $this->belongsTo(Sanction::class);

    }
}
