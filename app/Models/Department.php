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

    public static $rules = [
        'code' => ['required','min:3','max:50'],
        'name' => ['required','min:3', 'max:50'],
        'descriptions' => ['required','min:3','max:200']
    ];

    public function users(){

    	return $this -> hasMany(
    		User::class,
    		'department_id',
    		
    	);
    }

    public function leaves(){
    	return $this ->  hasManyThrough(
    		LeaveApplication::class,
    		User::class,
    		'department_id',
    		'staff_id'

    	);
    }

}
