<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
        protected $fillable=[
    	'authorNname',"describtion","title","genreId",'imageUrl'
    ];
}
