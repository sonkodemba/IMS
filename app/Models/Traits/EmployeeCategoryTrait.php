<?php

namespace App\Models\Traits;

trait EmployeeCategoryTrait{
/*
	+--------------+-----------------+------+-----+---------+----------------+
	| Field        | Type            | Null | Key | Default | Extra          |
	+--------------+-----------------+------+-----+---------+----------------+
	| id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| name         | varchar(255)    | NO   | UNI | NULL    |                |
	| descriptions | longtext        | YES  |     | NULL    |                |
	| deleted_at   | timestamp       | YES  |     | NULL    |                |
	| created_at   | timestamp       | YES  |     | NULL    |                |
	| updated_at   | timestamp       | YES  |     | NULL    |                |
	+--------------+-----------------+------+-----+---------+----------------+
*/

	public function getNameAttribute($name)
	{
		# get the @name value from the database
		return ucfirst($name)
	}

	public function getDescriptionAttribute($descriptions)
	{
		# code...
		return ucfirst(strval($descriptions));
	}


	/*
		set the mutators
	*/

		public function setNameAttribute($name)
		{
			# code...
			return $this -> attributes['name'] = strval($name);
		}

		public function setDescriptionAttribute($descriptions)
		{
			# code...
			return $this -> attributes['descriptions'] = $descriptions;
		}

}