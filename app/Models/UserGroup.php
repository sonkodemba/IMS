<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UserGroupTrait;


class UserGroup extends Model
{
    use HasFactory, UserGroupTrait;
    /*+-----------------------+-----------------+------+-----+---------+----------------+
    | Field                 | Type            | Null | Key | Default | Extra          |
    +-----------------------+-----------------+------+-----+---------+----------------+
    | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name                  | varchar(255)    | NO   |     | NULL    |                |
    | staff_id              | int unsigned    | NO   | UNI | NULL    |                |
    | social_security_num   | int unsigned    | NO   |     | NULL    |                |
    | mobile_num            | int unsigned    | NO   | UNI | NULL    |                |
    | gender_id             | bigint unsigned | NO   | MUL | NULL    |                |
    | marital_status_id     | bigint unsigned | NO   | MUL | NULL    |                |
    | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
    | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
    | branch_id             | bigint unsigned | NO   | MUL | NULL    |                |
    | pay_grade_id          | bigint unsigned | NO   | MUL | NULL    |                |
    | employee_category_id  | bigint unsigned | NO   | MUL | NULL    |                |
    | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
    | user_group_id         | bigint unsigned | NO   | MUL | NULL    |                |
    | profile_img           | mediumtext      | YES  |     | NULL    |                |
    | email                 | varchar(255)    | NO   | UNI | NULL    |                |
    | email_verified_at     | timestamp       | YES  |     | NULL    |                |
    | password              | varchar(255)    | NO   |     | NULL    |                |
    | remember_token        | varchar(100)    | YES  |     | NULL    |                |
    | deleted_at            | timestamp       | YES  |     | NULL    |                |
    | created_at            | timestamp       | YES  |     | NULL    |                |
    | updated_at            | timestamp       | YES  |     | NULL    |                |
    +-----------------------+-----------------+------+-----+---------+----------------+
*/



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
    		'user_group_id'
    	);
    }

    

}
