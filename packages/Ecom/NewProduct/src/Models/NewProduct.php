<?php

namespace Ecom\NewProduct\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Product\Models\ProductProxy;
use Webkul\Product\Models\Product;
use Ecom\NewProduct\Contracts\NewProduct as NewProductContract;

class NewProduct extends Model implements NewProductContract
{
    protected $fillable = [];

}