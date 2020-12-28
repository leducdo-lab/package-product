<?php

namespace TDP\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Type extends Model
{
    //
    protected $table = 'product_type';
    protected $primaryKey = 'id';

    public function Products() {
        return $this->hasMany('TDP\Product\Models\Products', 'product_type_id', 'local_key');
    }
}
