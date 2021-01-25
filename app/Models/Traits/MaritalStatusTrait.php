<?php

namespace App\Models\Traits;



trait MaritalStatusTrait{

	public function getNameAttribute($name)
	{
		# code...
		return ucfirst(strval($name));
	}
	

}