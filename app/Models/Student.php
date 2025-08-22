<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',
        'name',
        'last_name',
        'gender',
        'birth_date',
        'email',
        'password',
        'grade',
        'group',
        'education_program_id'
    ];

    public function educationalProgram():BelongsTo{

        return $this->belongsTo(EducationProgram::class);

    }

    public function sanctions():HasMany{
        
        return $this->hasMany(Sanction::class);

    }
}
