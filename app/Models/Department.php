<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\DepartmentTrait;

class Department extends Model
{
    use HasFactory, DepartmentTrait;

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
    protected $fillable = [
    	'code',
    	'name',
    	'descriptions'
    ];

    protected $hiddden = [
    	'id',
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];


    public function employees(){

    	return $this -> hasMany(
    		Employee::class, 
            'department_id',
            'id'
    	);
    }

    public function users(){

    	return $this -> hasManyThrough(
    		User::class,
    		Employee::class,
    		'department_id',
    		'staff_id',
            'id',
            'id'
    	);
    }

    public function leaves(){
    	return $this ->  hasManyThrough(
    		LeaveApplication::class,
    		Employee::class,
    		'department_id',
    		'staff_id'

    	);
    }

    



    
}
