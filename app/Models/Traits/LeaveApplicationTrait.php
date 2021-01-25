<?php


namespace App\Models\Traits;


trait LeaveApplicationTrait
{


/*
	+-------------------+-----------------+------+-----+---------+----------------+
	| Field             | Type            | Null | Key | Default | Extra          |
	+-------------------+-----------------+------+-----+---------+----------------+
	| id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
	| leave_category_id | bigint unsigned | NO   |     | NULL    |                |
	| start_date        | date            | NO   |     | NULL    |                |
	| end_date          | date            | NO   |     | NULL    |                |
	| descriptions      | longtext        | NO   |     | NULL    |                |
	| deleted_at        | timestamp       | YES  |     | NULL    |                |
	| created_at        | timestamp       | YES  |     | NULL    |                |
	| updated_at        | timestamp       | YES  |     | NULL    |                |
	+-------------------+-----------------+------+-----+---------+----------------+
*/

	public function getStaffIdAttribute($staff_id)
	{
		# code...
		return $staff_id;
	}

	public function getLeaveCategoryAttribute($leave_category_id)
	{
		# code...
		return $leave_category_id;
	}

	public function getStartDateAttribute($date)
	{
		# code...
		return $date;
	}

	public function getendDateAtrubute($date)
	{
		# code...
		return $date;
	}
	public function getDescriptionAttribute($descriptions)
	{
		# code...
		return ucfirst(strval($descriptions));
	}

	/*
		Get the Setter
	*/

		public function setStaffIdAttribute($staff_id)
		{
			# code...
			return $this -> 
		}
}
