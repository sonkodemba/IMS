<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LeaveApplicationTrait;


class LeaveApplication extends Model
{
    use HasFactory, LeaveApplicationTrait;

  /*
  +-------------------+-----------------+------+-----+---------+----------------+
  | Field             | Type            | Null | Key | Default | Extra          |
  +-------------------+-----------------+------+-----+---------+----------------+
  | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
  | staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
  | leave_category_id | bigint unsigned | NO   |     | NULL    |                |
  | start_date        | date            | NO   |     | NULL    |                |
  | end_date          | date            | NO   |     | NULL    |                |
  | descriptions      | longtext        | NO   |     | NULL    |                |
  | deleted_at        | timestamp       | YES  |     | NULL    |                |
  | created_at        | timestamp       | YES  |     | NULL    |                |
  | updated_at        | timestamp       | YES  |     | NULL    |                |
  +-------------------+-----------------+------+-----+---------+----------------+
  */

    protected $fillable = [
    	'staff_id',
    	'leave_category_id',
    	'start_date',
    	'end_date',
    	'descriptions'
    ];


   protected $hidden = [
   		'id',
   		'created_at',
   		'updated_at',
   		'deleted_at'
   ];



   public function employee(){

   	return belongsTo(
   		Employee::class,
   		'staff_id'
   	);

   }

   
   public function leave_category(){

   	return belongsTo(
   		LeaveCategory::class,
   		'leave_category_id'
   	);

   }


}
