<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function customer(){
        return $this->belongsTo('App\Customer');
        //прави релация one-to-many за да изведе името на customer (first_name), а не неготово id (customer_id)
}

}

