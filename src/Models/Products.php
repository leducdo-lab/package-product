<?php

namespace TDP\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    public function Carts() {
        return $this->hasMany('TDP\Product\Models\Carts', 'product_id', 'local_key');
    }

    public function Images() {
        return $this->hasMany('TDP\Product\Models\Images', 'product_id', 'local_key');
    }

    public function PK_Product() {
        return $this->hasMany('TDP\Product\Models\PK_Product', 'product_id', 'local_key');
    }
}

