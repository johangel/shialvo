<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    protected $fillable = [
        'description', 'title', 'picture', 'id_product_reference'
    ];
}
