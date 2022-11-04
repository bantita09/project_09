<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProducts extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "id";

    protected $table = 'type_product';

    protected $cast = [

        'name' => 'text',

    ];

    protected $fillable = [

        'name',

    ];

}
