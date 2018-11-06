<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
	// MassAssignment protection:: either use $fillable to declare which column can be assignable
	// or use $guarded to declare which column should be GUARDED, all other columns will assignable
	// protected $fillable = ['ad_title', 'ad_description', 'img', 'user_id', 'category_id'];
	protected $guarded = ['id']; // make all assignable, except the 'id' COLUMN

	// To take advantage of ORM, define relationships in Model
	// Laravel automatically finds and connects models with our databae tables.
	// but we need to name them correctly (i.e. 'Advert' Model and 'adverts' Table) 
	// If you want to use a different naming for the 'table', define this here with following
	// protected $table = 'customTableName';

    // each adverts is created by a user (belongs to user)
    public function user() {
    	return $this->belongsTo('App\User');
    }

    // Advert Model belongs to Category Model
    public function category() {
    	return $this->belongsTo('App\Category');
    }


    // we can also use this Model to access Advert data such as 'title, description'
    /* 
    public function getTitle(){
    	return $this->title;
    } 
    */


}
