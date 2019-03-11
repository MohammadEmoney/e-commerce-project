<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = [
        'parent_id', 'cat_id', 'name', 'en_name', 'type'
    ];
}
