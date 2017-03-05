<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function company(){
        return $this->hasOne('App\Company');
    }

    public function product(){
        return $this->belongsToMany('Product');
    }
}
