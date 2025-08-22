<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'guard_id',
        'date',
        'description',
        'paid',
        'read',
        'fine_id'
    ];

    public function student():BelongsTo{

        return $this->belongsTo(Student::class);
        
    }

    public function securityGuard():BelongsTo{

        return $this->belongsTo(SecurityGuard::class);

    }

    public function fine():HasOne{

        return $this->hasOne(Fine::class);

    }
}
