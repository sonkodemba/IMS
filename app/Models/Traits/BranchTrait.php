<?php


namespace App\Models\Traits;


trait BranchTrait
{



     /* On the other hand, the @accessor allows you to alter data after              
      it's fetched from a database                                                 
     */                                                                         

		/*
		+-------------+-----------------+------+-----+---------+----------------+
		| Field       | Type            | Null | Key | Default | Extra          |
		+-------------+-----------------+------+-----+---------+----------------+
		| id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
		| location_id | bigint unsigned | NO   | MUL | NULL    |                |
		| code        | varchar(255)    | NO   | UNI | NULL    |                |
		| name        | varchar(255)    | NO   | UNI | NULL    |                |
		| mobile      | int unsigned    | NO   |     | NULL    |                |
		| address     | varchar(255)    | YES  |     | NULL    |                |
		| deleted_at  | timestamp       | YES  |     | NULL    |                |
		| created_at  | timestamp       | YES  |     | NULL    |                |
		| updated_at  | timestamp       | YES  |     | NULL    |                |
		+-------------+-----------------+------+-----+---------+----------------+
		*/


	public function getLocationAttribute($location)
	{
		/*
		 Get the Location Name by ID
		 Let the Location name be in Capital
		*/

		 return ucfirst($location);
	}


	public function getCodeAttribute($code)
	{
		/*

		*/
		return strtoupper($code);
	}

	public function getNameAttribute($name)
	{
		# code...
		return ucfirst($name);
	}

	public function getAddressAttribute($address)
	{
		# code...
		return $address;
	}

	public function getMobileAttribute($mobile)
	{
		# code...
		return '(+220) - '.$mobile;
	}


	/*
		shape the Data before its inserted into the Database.
		this is also called Mutators
	*/

	
	public function setLocationAttribute($location)
	{
		# code...
		return $this -> attributes['location'] = ucfirst($location);
	}

	public function setCodeAttribute($code)
	{
		# code...
		return $this -> attributes['code'] = strtoupper($code);
	}


	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = ucfirst($name);
	}

	public function setMobileAttribute($mobile)
	{
		# code...
		return $this -> attributes['mobile'] = $mobile;
	}

	public function setAddressAttribute($address)
	{
		# code...
		return $this -> attributes['address'] = ucfirst($address);
	}



}
