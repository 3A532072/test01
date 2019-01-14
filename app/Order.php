<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['address'];

    public function users()
    {
        return $this->hasMany('App/User');
    }
    public function stores()
    {
        return $this->hasMany('App/Store');
    }
    public function lists()
    {
        return $this->hasMany('App/List');
    }
}
