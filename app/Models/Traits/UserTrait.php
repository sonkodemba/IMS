<?php


namespace App\Models\Traits;

use App\Models\Traits\UserTrait;

trait UserTrait
{


	public function getStaffIdAttribute($staff_id)
	{
		# code...
		return '3 - 5'.strval($staff_id);
	}

	public function getNameAttribute($name)
	{
		# code...
		return ucfirst(strval($name));
	}

	public function getUserGroupAttribute($user_group_id)
	{
		# code...
		return $user_group_id;
	}

	public function getEmailAttribute($email)
	{
		# code...
		return strtolower(strval($email));
	}

	/*
	+-------------------+-----------------+------+-----+---------+----------------+
	| Field             | Type            | Null | Key | Default | Extra          |
	+-------------------+-----------------+------+-----+---------+----------------+
	| id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
	| name              | varchar(255)    | NO   |     | NULL    |                |
	| user_group_id     | bigint unsigned | NO   | MUL | NULL    |                |
	| email             | varchar(255)    | NO   | UNI | NULL    |                |
	| email_verified_at | timestamp       | YES  |     | NULL    |                |
	| password          | varchar(255)    | NO   |     | NULL    |                |
	| remember_token    | varchar(100)    | YES  |     | NULL    |                |
	| deleted_at        | timestamp       | YES  |     | NULL    |                |
	| created_at        | timestamp       | YES  |     | NULL    |                |
	| updated_at        | timestamp       | YES  |     | NULL    |                |
	+-------------------+-----------------+------+-----+---------+----------------+

	*/

	public function setStaffIdAttribute($staff_id)
	{
		# code:
		/*
			staff Id cannot be a negative integer or decimal values
			However do the following to get the right values:

			1 => check if staff id is Integer or Not: otherwise change  it to integer
			2 => use abs() fuction to get the positive value as the Staff id.
		*/
		$staffId = null;
		if (!is_integer($staff_id)) {
			# code...
			$staffId = integer($staff_id);
		}

		return $this -> attributes['staff_id'] = abs($staffId);
	}


	public function setNameAttribute($name)
	{
		# code...
		return $this -> attributes['name'] = strval($name);
	}

	public function setEmailAttribute($email)
	{
		# code...
		return $this-> attributes['email'] = strtolower(strval($email));
	}

}
