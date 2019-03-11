<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'brand', 'image', 'price', 'body', 'discount', 'status', 'user_id', 'cat_id'
    ];

    public static function search($query){
//        dd($query);
        $products = Product::orderBy('name', 'DESC');
        if (sizeof($query) > 0){
            if (array_key_exists('search', $query)){
                $products = $products->where('name', 'like', '%'.$query['search'].'%');
            }
        }

        $products = $products->paginate(10);
        return $products;
    }
}
