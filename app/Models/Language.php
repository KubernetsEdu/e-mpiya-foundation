<?php namespace App\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Language extends Eloquent {

	protected $fillable = [];
	
	public function userLanguages()
	{
		return $this->hasMany('UserLanguage');
	}

}