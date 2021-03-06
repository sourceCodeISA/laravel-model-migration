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
        Schema::create('_employees', function (Blueprint $table) {
            $table -> id();

            $table -> string('name', 100);
            $table -> string('lastname', 100);
            $table -> timestamp('date_of_birth');
            $table -> integer('RAL');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_employees');
    }
}
