<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\EmployeeTrait;

class Employee extends Model
{
    use HasFactory;

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

  protected $fillable = [
     'name',
     'staff_id',
     'gender_id',
     'marital_status_id',
     'department_id',
     'designation_id',
     'branch_id',
     'social_security_num',
     'pay_grade_id',
     'employee_category_id',
     'mobile_num',
     'profile_img'

    ];

  protected $hidden = [

  	'id',
  	'created_at',
  	'updated_at',
  	'deleted_at'
  ];


public function branch(){

	return $this ->  belongsTo(
		Branch::class,
		'branchi_id'
	);
}

public function employee_category(){

	return $this ->  belongsTo(
		EmployeeCategory::class,
		'employee_category_id'
	);
}

 
public function paygrade(){

	return $this -> belongsTo(
		PayGrade::class,
		'pay_grade_id'
	);
}

public function marital_status(){

	return $this ->  belongsTo(
		MaritalStatus::class,
		'marital_status_id'
	);
}

  public function gender(){

	return $this -> belongsTo(
		Gender::class,
		'gender_id'
	);
}

public function designation(){

	return $this -> belongsTo(
		Designation::class,
		'designation_id'
	);
}

public function department(){

	return $this -> belongsTo(
		Department::class,
		'department_id'
	);
}
  
  public function users(){

  	return $this -> hasMany(
  		User::class,
  		// 'staff_id'
  	);
  }


public function leaves(){

	return $this ->  hasMany(
		LeaveApplication::class,
		'staff_id'
	);
}

}
