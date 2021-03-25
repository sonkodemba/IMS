<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\GenderTrait;


class Gender extends Model
{
    use HasFactory, GenderTrait;

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

    public static $rules = [
        'name' => ['required','min:1','max:1'],
        'descriptions' => ['required','min:2','max:100']
    ];

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

    public function users()
    {
        # code...
        return $this -> hasMany(
            User::class,
            'gender_id'
        );
    }

    public function leaves()
    {
        # code...
        return $this -> hasManyThrough(
            LeaveApplication::class,
            User::class,
            'gender_id', 
            'staff_id',
        );
    }
}
