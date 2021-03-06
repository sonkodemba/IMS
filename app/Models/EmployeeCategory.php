<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\EmployeeCategoryTrait;

class EmployeeCategory extends Model
{
    use HasFactory, EmployeeCategoryTrait;


// +--------------+-----------------+------+-----+---------+----------------+
// | Field        | Type            | Null | Key | Default | Extra          |
// +--------------+-----------------+------+-----+---------+----------------+
// | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
// | name         | varchar(255)    | NO   | UNI | NULL    |                |
// | descriptions | longtext        | YES  |     | NULL    |                |
// | deleted_at   | timestamp       | YES  |     | NULL    |                |
// | created_at   | timestamp       | YES  |     | NULL    |                |
// | updated_at   | timestamp       | YES  |     | NULL    |                |
// +--------------+-----------------+------+-----+---------+----------------+

    protected $fillable = [
    	'name',
    	'descriptions'
    ];

    protected $hidden = [
    	'id',
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];
 


	public function users(){

		return hasMany(
			User::class,
			'employee_category_id',
			'staff_id'
		);
	}   

	public function leaves(){
		return hasManyThrough(
			LeaveApplication::class,
			Employee::class,
			'employee_category_id',
			'staff_id'
		);
	}

}
