<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'photo',
        'created_by',
    ];
}
