<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function productVariants(){
        return $this->hasMany('App\Models\ProductVariant', 'variant_id')->groupBy('variant');
    }

}
