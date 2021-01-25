<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> integer('staff_id') -> unsigned() -> unique();
            $table -> bigInteger('gender_id') -> unsigned();
            $table -> bigInteger('marital_status_id') -> unsigned();
            $table -> bigInteger('department_id') -> unsigned();
            $table -> bigInteger('designation_id') -> unsigned();
            $table -> bigInteger('branch_id') -> unsigned();
            $table -> integer('social_security_num') -> unsigned();
            $table -> bigInteger('pay_grade_id') -> unsigned();
            $table -> bigInteger('employee_category_id') -> unsigned();
            $table -> integer('mobile_num') -> unique() -> unsigned();
            $table -> mediumText('profile_img') -> nullable();
            $table -> foreign('gender_id') -> references('id') -> on('genders') -> onDelete('cascade');
            $table -> foreign('department_id') -> references('id') -> on('departments') -> onDelete('cascade');
            $table -> foreign('designation_id') -> references('id') -> on('designations') -> onDelete('cascade');
            $table -> foreign('pay_grade_id') -> references('id') -> on('pay_grades') -> onDelete('cascade');
            $table -> foreign('employee_category_id') -> references('id') -> on('employee_categories') -> onDelete('cascade');
            $table -> foreign('branch_id') -> references('id') -> on('branches') -> onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
