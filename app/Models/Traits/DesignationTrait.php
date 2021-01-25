<?php


namespace App\Models\Traits;


trait DesignationTrait
{

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

	public function getDescriptionsAttribute($descriptions)
	{
		# code...
		return ucfirst($descriptions);
	}

	public function setCodeAttribute($code)
	{
		# code...
		return $this -> attributes['code'] = $code;
	}

	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = $name;
	}

	public function setDescriptionsAttribute($descriptions)
	{
		# code...
		return $this -> attributes['descriptions'] = $descriptions;
	}

}
