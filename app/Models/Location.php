<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LocationTrait;


class Location extends Model
{
    use HasFactory, LocationTrait;
	/*
	+--------------+-----------------+------+-----+---------+----------------+
	| Field        | Type            | Null | Key | Default | Extra          |
	+--------------+-----------------+------+-----+---------+----------------+
	| id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
	| name         | varchar(255)    | NO   | UNI | NULL    |                |
	| descriptions | text            | YES  |     | NULL    |                |
	| created_at   | timestamp       | YES  |     | NULL    |                |
	| updated_at   | timestamp       | YES  |     | NULL    |                |
	+--------------+-----------------+------+-----+---------+----------------+
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


	public function branches(){
		return $this -> hasMany(
			Branch::class,
			'location_id'
		);
	}


	public function users(){
		return $this -> hasManyThrough(
			User::class,
			Branch::class,
			'location_id',
			'branch_id'
		);
	}

	public function leaves(){
		return $this -> hasManyThrough(
			LeaveApplication::class,
			Branch::class,
			'location_id',
			'branch_id',
		);
	}


}
