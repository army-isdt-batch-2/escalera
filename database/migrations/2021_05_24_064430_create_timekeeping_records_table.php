<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index();
            $table->date('clock_in')->index();
            $table->date('clock_out')->index();
            $table->integer('total')->index();
            $table->unsignedBigInteger('timekeeping_id')->index();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employee');
            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
