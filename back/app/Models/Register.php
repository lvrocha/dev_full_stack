<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'name', 'email', 'date_of_birth', 'phone',
    ];
}
