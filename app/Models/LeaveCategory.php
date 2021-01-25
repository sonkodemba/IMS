<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LeaveCategoryTrait;

class LeaveCategory extends Model
{
    use HasFactory, LeaveCategoryTrait;

    /*
    +------------------+-----------------+------+-----+---------+----------------+
    | Field            | Type            | Null | Key | Default | Extra          |
    +------------------+-----------------+------+-----+---------+----------------+
    | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name             | varchar(255)    | NO   | UNI | NULL    |                |
    | duration_in_days | int unsigned    | NO   |     | NULL    |                |
    | descriptions     | longtext        | YES  |     | NULL    |                |
    | deleted_at       | timestamp       | YES  |     | NULL    |                |
    | created_at       | timestamp       | YES  |     | NULL    |                |
    | updated_at       | timestamp       | YES  |     | NULL    |                |
    +------------------+-----------------+------+-----+---------+----------------+
    */

    protected $fillable = [
    	'name',
    	'duration_in_days',
    	'descriptions'
    ];
    
    protected $hidden = [
    	'id',
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];


    public function leaves(){
    	return hasMany(
    		LeaveApplication::class,
    		'leave_category_id');
    }
}
