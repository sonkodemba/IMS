<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

// +--------------+-----------------+------+-----+---------+----------------+
// | Field        | Type            | Null | Key | Default | Extra          |
// +--------------+-----------------+------+-----+---------+----------------+
// | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
// | name         | varchar(255)    | NO   | UNI | NULL    |                |
// | descriptions | longtext        | YES  |     | NULL    |                |
// | deleted_at   | timestamp       | YES  |     | NULL    |                |
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

    public function users(){
    	return hasMant(
    		User::class,
    		'user_group_id'
    	);
    }

    

}
