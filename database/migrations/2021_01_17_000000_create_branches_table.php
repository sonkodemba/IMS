<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('location_id') -> unsigned();
            $table -> string('code') -> unique();
            $table -> string('name') -> unique();
            $table -> integer('mobile') -> unsigned();
            $table -> string('address')-> nullable();
            $table -> softDeletes();
            $table -> foreign('location_id') -> references('id') -> on('locations') -> onDelete('cascade');
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
        Schema::dropIfExists('branches');
    }
}
