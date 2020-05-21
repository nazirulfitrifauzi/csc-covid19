<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nric');
            $table->string('department');
            $table->string('temperature');
            $table->string('quest1');
            $table->string('quest2');
            $table->string('quest3');
            $table->string('quest4');
            $table->string('quest5');
            $table->string('quest6');
            $table->string('quest7');
            $table->string('quest8');
            $table->string('quest9');
            $table->string('quest10');
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
        Schema::dropIfExists('employee');
    }
}
