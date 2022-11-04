<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [

        'name',
        'detail',
        'price',
        'image',
        'amount',
        'id_type_product',

    ];

    public function type()
    {
        return $this->belongsTo(TypeProducts::class, 'id_type_product', 'id')->withDefault();
    }

}
