<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $filable = [
        'admin_id',
        'name',
        'last_name',
        'birth_date',
        'email',
        'password',
        'gender'
    ];
}
