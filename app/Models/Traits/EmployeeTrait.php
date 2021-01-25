<?php

namespace App\Models\Traits;

trait EmployeeTrait{


	/*

	+----------------------+-----------------+------+-----+---------+----------------+
	| Field                | Type            | Null | Key | Default | Extra          |
	+----------------------+-----------------+------+-----+---------+----------------+
	| id                   | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| name                 | varchar(255)    | NO   |     | NULL    |                |
	| staff_id             | int unsigned    | NO   | UNI | NULL    |                |
	| gender_id            | bigint unsigned | NO   | MUL | NULL    |                |
	| marital_status_id    | bigint unsigned | NO   |     | NULL    |                |
	| department_id        | bigint unsigned | NO   | MUL | NULL    |                |
	| designation_id       | bigint unsigned | NO   | MUL | NULL    |                |
	| branch_id            | bigint unsigned | NO   | MUL | NULL    |                |
	| social_security_num  | int unsigned    | NO   |     | NULL    |                |
	| pay_grade_id         | bigint unsigned | NO   | MUL | NULL    |                |
	| employee_category_id | bigint unsigned | NO   | MUL | NULL    |                |
	| mobile_num           | int unsigned    | NO   | UNI | NULL    |                |
	| profile_img          | mediumtext      | YES  |     | NULL    |                |
	| deleted_at           | timestamp       | YES  |     | NULL    |                |
	| created_at           | timestamp       | YES  |     | NULL    |                |
	| updated_at           | timestamp       | YES  |     | NULL    |                |
	+----------------------+-----------------+------+-----+---------+----------------+

	*/

	public function getNameAttribute($name)
	{
		# code...
		return strval($name);
	}

	public function getStaffIDAttribute($staff_id)
	{
		
	}
}