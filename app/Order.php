<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = array();

    public function catName()
    {
        return Category::where('id',$this->category_id)->first();
    }


}
