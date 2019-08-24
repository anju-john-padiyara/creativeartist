<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = 'project'; 

    public function photos() {
    	return $this->hasMany(Photo::class);
    }
     public function getRouteKeyName(){
   		return 'project_pathname';
    }
    public function thumbnailImage() {
        return $this->photos()->where('photo_status','=', 1);
    }
    public function bannerImage() {
        return $this->photos()->where('photo_status','=', 2);
    }
    public function projectImage() {
        return $this->photos()->where('photo_status','=', 3);
    }
}
