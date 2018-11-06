<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = ['id'];

    // Define relationship. This Category has Many ADVERTS. 
    public function adverts() {
    	return $this->hasMany('App\Advert', 'category_id');
    	// We tell Laravel to use 'category_id' to find relevant ADVER
    }

}
