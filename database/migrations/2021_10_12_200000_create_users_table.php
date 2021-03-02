<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table -> integer('staff_id') -> unsigned() -> unique();
            $table -> integer('social_security_num') -> unsigned();
            $table -> integer('mobile_num') -> unique() -> unsigned();
            
            $table -> bigInteger('gender_id') -> unsigned();
            $table -> bigInteger('marital_status_id') -> unsigned();
            $table -> bigInteger('department_id') -> unsigned();
            $table -> bigInteger('designation_id') -> unsigned();
            $table -> bigInteger('branch_id') -> unsigned();
            $table -> bigInteger('pay_grade_id') -> unsigned();
            $table -> bigInteger('employee_category_id') -> unsigned();
            $table -> bigInteger('employee_education_id') -> unsigned();
            $table -> bigInteger('user_group_id') -> unsigned();
            $table -> mediumText('profile_img') -> nullable();
            

            $table -> foreign('gender_id') -> references('id') -> on('genders');
            $table -> foreign('department_id') -> references('id') -> on('departments');
            $table -> foreign('designation_id') -> references('id') -> on('designations');
            $table -> foreign('pay_grade_id') -> references('id') -> on('pay_grades');
            $table -> foreign('employee_category_id') -> references('id') -> on('employee_categories');
            $table -> foreign('employee_education_id') -> references('id') -> on('employee_education');
            $table -> foreign('branch_id') -> references('id') -> on('branches');
            $table -> foreign('user_group_id') -> references('id') -> on('user_groups');
            $table -> foreign('marital_status_id') -> references('id') -> on('marital_statuses');
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table -> softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
