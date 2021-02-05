<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('staff_id') -> unsigned();
            $table -> bigInteger('leave_category_id') -> unsigned();
            $table -> date('start_date');
            $table -> date('end_date');
            $table -> longText('descriptions');
            $table -> softDeletes();
            $table -> foreign('staff_id') -> references('id') -> on('users');
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
        Schema::dropIfExists('leave_applications');
    }
}
