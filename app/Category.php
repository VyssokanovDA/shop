<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'alias', 'description'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
