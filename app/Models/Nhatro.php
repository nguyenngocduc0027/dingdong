<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhatro extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acreage',
        'price',
        'n_floor',
        'n_room',
        'room_in_floor',
        'address',
        'status',
        'images',
        'description',
    ];
}