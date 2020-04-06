<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    //
    protected $table = "agenda";
 protected $fillable = [
        'agenda','keterangan'
    ];
}
