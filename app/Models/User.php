<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Traits\UserTrait;

class User extends Authenticatable
{
    /*
    +-----------------------+-----------------+------+-----+---------+----------------+
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
    +-----------------------+-----------------+------+-----+---------+----------------+*/


    use HasFactory, Notifiable, UserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'staff_id',
        'social_security_num',
        'mobile_num',
        'gender_id',
        'marital_status_id',
        'department_id',
        'designation_id',
        'branch_id',
        'pay_grade_id',
        'employee_category_id',
        'employee_education_id',
        'user_group_id',
        'profile_img',
        'email',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
  
public function leaves(){

    return $this ->  hasMany(
        LeaveApplication::class,
        'staff_id'
    );
}
    public function usergroup(){

        return $this -> belongsTo(

            UserGroup::class,
            'user_group_id'
        );
    }


}
