<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

// +--------------+-----------------+------+-----+---------+----------------+
// | Field        | Type            | Null | Key | Default | Extra          |
// +--------------+-----------------+------+-----+---------+----------------+
// | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
// | name         | varchar(255)    | NO   | UNI | NULL    |                |
// | descriptions | text            | YES  |     | NULL    |                |
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


	public function branches(){
		return hasMany(
			Branch::class,
			'location_id'
		);
	}

	public function employees(){
		return hasManyThrough(
			Employee::class,
			Branch::class,
			'location_id',
			'branch_id'
		);
	}

	public function users(){
		return hasManyThrough(
			User::class,
			Branch::class,
			'location_id',
			'branch_id'
		);
	}

	public function leaves(){
		return hasManyThrough(
			LeaveApplication::class,
			Branch::class,
			'location_id',
			'branch_id'
		);
	}



}
