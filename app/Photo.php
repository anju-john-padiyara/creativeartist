<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'photo'; 
	protected  $primaryKey  = 'photo_id'; 

    public function project() {
    	return $this->belongsTo(Project::class);
    }
}
