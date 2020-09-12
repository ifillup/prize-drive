<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public function prizes()
    {
        return $this->hasMany(Product::class);
    }
}
