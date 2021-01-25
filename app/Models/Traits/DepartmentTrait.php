<?php

namespace App\Models\Traits;
trait DepartmentTrait{
	/*
	+--------------+-----------------+------+-----+---------+----------------+
	| Field        | Type            | Null | Key | Default | Extra          |
	+--------------+-----------------+------+-----+---------+----------------+
	| id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| code         | varchar(255)    | NO   | UNI | NULL    |                |
	| name         | varchar(255)    | NO   | UNI | NULL    |                |
	| descriptions | longtext        | YES  |     | NULL    |                |
	| deleted_at   | timestamp       | YES  |     | NULL    |                |
	| created_at   | timestamp       | YES  |     | NULL    |                |
	| updated_at   | timestamp       | YES  |     | NULL    |                |
	+--------------+-----------------+------+-----+---------+----------------+
*/

	public function getCodeAttribute($code)
	{
		# code...
		return strtoupper($code);
	}

	public function getNameAttribute($name)
	{
		# code...
		return ucfirst($name);
	}

	public function getDescriptionAttribute($descriptions)
	{
		# code...
		return ucfirst($descriptions);
	}



	/*
		Defining the mutators
	*/

	public function setCodeAttribute($code)
	{
		# code...
		return $this -> attributes['code'] = strval($code);
	}

	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = strval($name);
	}

	public function setDescriptionAttribute($descriptions)
	{
		# code...
		return $this -> attributes['descriptions'] = strval($descriptions);
	}
}
