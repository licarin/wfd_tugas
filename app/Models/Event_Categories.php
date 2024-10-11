<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Categories extends Model
{
    use HasFactory;
    protected $table = 'event__categories';
    protected $fillable = [
        'name',
        'active',
    ];
}
