<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'endDate',
        'create_at',
        'update_at',
    ];
}
