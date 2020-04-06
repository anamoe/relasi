<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    //
     protected $table = "masyarakats";

           protected $fillable=[
'nama','hadiah_id','poin_id'
      ];

      public function hadiah() {
    	
    	return $this->belongsTo('App\Hadiah','hadiah_id','id');
    }
      public function poin() {
    
    	return $this->belongsTo('App\Poin','poin_id','id');
    }
}
