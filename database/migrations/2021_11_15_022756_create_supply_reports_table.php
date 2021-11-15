<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_reports', function (Blueprint $table) {
            $table->id('supply_report_id');
            $table->integer('emp_id')->foreignId('emp_id')->constrained('employees');
            $table->integer('product_id')->foreignId('product_id')->constrained('products');
            $table->integer('supplier_id')->foreignId('supplier_id')->constrained('suppliers');
            $table->integer('quantity');
            $table->integer('amount');
            $table->string('type', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_reports');
    }
}
