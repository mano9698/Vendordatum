<?php

namespace App\Model\UI;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['title', 'product_name', 'description', 'availability', 'price', 'product_pic', 'product_doc'];
}
