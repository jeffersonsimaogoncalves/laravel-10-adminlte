<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiMode extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode'
    ];
    
}
