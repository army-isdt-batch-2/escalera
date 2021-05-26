<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->index();
            $table->string('full_name')->index();
            $table->string('designation')->index();
            $table->enum('loan_type', [
                'Home Loan','Car Loan'

            ])->index();
            $table->integer('loan_amount')->index();
            $table->integer('months_payable')->index(); 
            $table->longText('notes')->index();       
            $table->softDeletes();  
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employee');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
