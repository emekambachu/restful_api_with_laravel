<?php

namespace App;

use App\Scopes\SellerScope;

class Seller extends User
{
    // insert seller scope from app folder
    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new SellerScope());
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
