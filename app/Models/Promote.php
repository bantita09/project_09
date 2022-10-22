<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Promote extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'promote';
    protected $fillable = [
        'name',
        'detail',
        'image',
        'type_product',
    ];
    protected $primaryKey = 'id';
}
