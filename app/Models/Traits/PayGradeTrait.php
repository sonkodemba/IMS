<?php


namespace App\Models\Traits;

use App\Models\Traits\PayGradeTrait;

trait PayGradeTrait
{
	
		public function getNameAttribute($name)
	{
		# code...
		return ucfirst(strval($name));
	}

	public function getDescriptionAttribute($descriptions)
	{
		# code...
		return strval($descriptions);
	}
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
	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = ucfirst($name);
	}

	public function setDescriptionAttribute($name)
	{
		# code...
		$this -> attributes['name'] = strval($name);
	}

}
