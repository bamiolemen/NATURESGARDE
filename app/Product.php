<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		'title','content','price','quantity','category_id','featured','slug','user_id'
	];

	public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
