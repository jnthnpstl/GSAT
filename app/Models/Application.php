<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'apply_form';

    protected $casts = [
        'scholarships' => 'array', 
        'opportunities' => 'array', 
    ];
}
