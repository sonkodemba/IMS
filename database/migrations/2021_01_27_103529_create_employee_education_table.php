<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_education', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('employee_education_category_id') -> unsigned();
            $table -> string('name') -> unique();
            $table ->longText('descriptions') -> nullable();
            $table -> foreign('employee_education_category_id') -> references('id') ->on('employee_education_catrgories');
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
        Schema::dropIfExists('employee_education');
    }
}
