<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
	 protected $table = "poins";
	            protected $fillable=[
'poin'
      ];

	  public function hadiah(){
    
    	return $this->belongsTo('App\Hadiah','id');
    }
}
