<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Back extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'back';
    protected $fillable = [
        'name',
        'image',
        'name',
        'detail',
    ];
}
