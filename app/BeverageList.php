<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeverageList extends Model
{
    protected $fillable = [
		'size'
		,'temprate'
		,'ice'
		,'sweet'
		,'number'];

		public function products()
		{
			return $this->belongsTo('App/Product');
		}
		public function orders()
		{
			return $this->belongsTo('App/Order');
		}
}
