<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = [
		'id'
		,'name'
		,'address'
		,'country'
		,'region'
		,'phone'
		,'businesshour'];
		
		public function orders()
		{
			return $this->belongsTo('App/Order');
		}
	}
