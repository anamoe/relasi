<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = "hadiahs";
               protected $fillable=[
'hadiah'
      ];

       public function poin(){
    	
    	return $this->belongsTo('App\Poin','id');
    }
}
