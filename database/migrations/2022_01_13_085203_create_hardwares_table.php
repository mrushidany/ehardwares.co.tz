<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('discount_id');
            $table->foreign('category_id')->references('id')->on('hardware_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inventory_id')->references('id')->on('hardware_inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('discount_id')->references('id')->on('sales_discounts')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('hardwares');
    }
}
