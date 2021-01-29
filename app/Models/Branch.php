<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\BranchTrait;

class Branch extends Model
{
    use HasFactory, BranchTrait;

/*
    +-------------+-----------------+------+-----+---------+----------------+
    | Field       | Type            | Null | Key | Default | Extra          |
    +-------------+-----------------+------+-----+---------+----------------+
    | id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | location_id | bigint unsigned | NO   | MUL | NULL    |                |
    | code        | varchar(255)    | NO   | UNI | NULL    |                |
    | name        | varchar(255)    | NO   | UNI | NULL    |                |
    | mobile      | int unsigned    | NO   |     | NULL    |                |
    | address     | varchar(255)    | YES  |     | NULL    |                |
    | deleted_at  | timestamp       | YES  |     | NULL    |                |
    | created_at  | timestamp       | YES  |     | NULL    |                |
    | updated_at  | timestamp       | YES  |     | NULL    |                |
    +-------------+-----------------+------+-----+---------+----------------+
*/

    protected $fillable = [
    	'location_id',
    	'code',
    	'name',
    	'mobile',
    	'address'

    ];

    protected $hidden = [
    	'id',
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];
    
    public function users(){

    	return $this -> hasManyThrough(
    		User::class,
    		Employee::class,
    		'branch_id',
    		'staff_id'
    	);
    }


    public function employees(){

    	return $this -> hasMany(
    		Employee::class, 
            'branch_id'

    	);
    }
    public function location(){

    	return $this -> belongsTo(
    	  Location::class,
    	  'location_id'
    	);
    }

    public function leaves()
    {
        # code...
        return $this -> hasManyThrough(
            LeaveApplication::class, 
            Employee::class, 
            'branch_id',
            'staff_id'
        );
    }
}
