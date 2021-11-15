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
            $table->id('emp_id');
            $table->integer('role_id')->foreign('role_id')->constrained('roles');
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('street',30);
            $table->string('city',30);
            $table->string('province',30);
            $table->string('zip_code',8);
            $table->string('phone_no',14);
            $table->string('email',30)->unique();
            $table->string('password',30);
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
