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

        return $this->belongsTo(Student::class, 'student_id', 'student_id');
        
    }

    public function securityGuard():BelongsTo{

        return $this->belongsTo(SecurityGuard::class, 'guard_id', 'guard_id');

    }

    public function fine():BelongsTo{

        return $this->belongsTo(Fine::class,'fine_id');

    }
}
