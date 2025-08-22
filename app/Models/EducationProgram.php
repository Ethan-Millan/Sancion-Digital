<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EducationProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_name',
        'program_abbreviation',
    ];

    public function students():BelongsTo{

        return $this->belongsTo(Student::class);

    }
}
