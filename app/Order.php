<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['address'];

    public function users()
    {
        return $this->belongsTo('App/User');
    }
    public function stores()
    {
        return $this->belongsTo('App/Store');
    }
    public function lists()
    {
        return $this->belongsTo('App/BeverageList','beveragelist_id');
    }
}
