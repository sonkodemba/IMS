<?php


namespace App\Models\Traits;

use App\Models\Traits\LocationTrait;


trait LocationTrait
{

	public function getNameAttribute($name)
	{
		# code...
		return ucfirst(strval($name));
	}

	public function getDescriptionAttribute($descriptions)
	{
		# code...
		return ucfirst(strval($descriptions));
	}


/*
	+--------------+-----------------+------+-----+---------+----------------+
	| Field        | Type            | Null | Key | Default | Extra          |
	+--------------+-----------------+------+-----+---------+----------------+
	| id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| name         | varchar(255)    | NO   | UNI | NULL    |                |
	| descriptions | text            | YES  |     | NULL    |                |
	| created_at   | timestamp       | YES  |     | NULL    |                |
	| updated_at   | timestamp       | YES  |     | NULL    |                |
	+--------------+-----------------+------+-----+---------+----------------+
*/


	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = ucfirst(strval($name));
	}

	public function setDescriptionAttribute($descriptions)
	{
		# code...
		return $this -> attributes['descriptions'] = strval($descriptions);
	}
}
