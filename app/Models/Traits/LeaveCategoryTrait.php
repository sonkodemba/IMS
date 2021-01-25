<?php


namespace App\Models\Traits;

use App\Models\Traits;


trait LeaveCategoryTrait
{

	public function getNameAttribute($value)
	{
		# code...
		return ucfirst(strval($value));
	}


	public function getDurationAttribute($value)
	{
		# code...
		return $value;
	}
	public function getDescriptionAttribute($value)
	{
		# code...
		return ucfirst(strval($value));
	}
/*
	+------------------+-----------------+------+-----+---------+----------------+
	| Field            | Type            | Null | Key | Default | Extra          |
	+------------------+-----------------+------+-----+---------+----------------+
	| id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| name             | varchar(255)    | NO   | UNI | NULL    |                |
	| duration_in_days | int unsigned    | NO   |     | NULL    |                |
	| descriptions     | longtext        | YES  |     | NULL    |                |
	| deleted_at       | timestamp       | YES  |     | NULL    |                |
	| created_at       | timestamp       | YES  |     | NULL    |                |
	| updated_at       | timestamp       | YES  |     | NULL    |                |
	+------------------+-----------------+------+-----+---------+----------------+

*/

	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = $name;
	}

	public function setDurationAttribute($durations)
	{
		$value = null;
		# code...
		if (!is_integer($durations)) {
			# checking if the duration is not integer..
			#convert the value into an integer value

			$value = integer($durations);

		}
		
		return $this -> attributes['duration_in_days'] = floor($value);
	}


	public function setDescriptionAttribute($value)
	{
		# code...
		return $this -> attributes['descriptions'] = strval($value);
	}

}
