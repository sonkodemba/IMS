<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\DesignationTrait;

class Designation extends Model
{
    use HasFactory, DesignationTrait;

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

    protected  $fillable = [
    	'code',
    	'name',
    	'descriptions'
    ];
    protected $hidden = [
    	'id',
    	'created_at',
    	'deleted_at',
    	'updated_at'
    ];


    public function employees(){

    	return hasMany(
    		Employee::class,
    	   'designation_id'
    	);
    }

    public function users(){
    	return hasManyThrough(
    		User::class,
    		Employee::class,
    		'designation_id',
    		'staff_id'
    	);
    }

    public function leaves(){
    	return hasManyThrough(

    		LeaveApplication::class,
    		Employee::class,
    		'designation_id',
    		'staff_id'
    	);
    }
}
