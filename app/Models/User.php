<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
        // +-------------------+-----------------+------+-----+---------+----------------+
        // | Field             | Type            | Null | Key | Default | Extra          |
        // +-------------------+-----------------+------+-----+---------+----------------+
        // | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        // | staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
        // | name              | varchar(255)    | NO   |     | NULL    |                |
        // | user_group_id     | bigint unsigned | NO   | MUL | NULL    |                |
        // | email             | varchar(255)    | NO   | UNI | NULL    |                |
        // | email_verified_at | timestamp       | YES  |     | NULL    |                |
        // | password          | varchar(255)    | NO   |     | NULL    |                |
        // | remember_token    | varchar(100)    | YES  |     | NULL    |                |
        // | deleted_at        | timestamp       | YES  |     | NULL    |                |
        // | created_at        | timestamp       | YES  |     | NULL    |                |
        // | updated_at        | timestamp       | YES  |     | NULL    |                |
        // +-------------------+-----------------+------+-----+---------+----------------+


    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_id',
        'name',
        'user_group_id',
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


    public function usergroup(){

        return belongsTo(

            UserGroup::class,
            'user_group_id'
        );
    }

    public function employee(){

        return belongsTo(

            Employee::class,
            'staff_id'
        );
    }

}
