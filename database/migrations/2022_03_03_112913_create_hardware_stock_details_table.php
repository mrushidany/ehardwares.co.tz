<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_stock_details', function (Blueprint $table) {
            $table->id();
            $table->string('units');
            $table->integer('quantity');
            $table->string('raw_price');
            $table->string('selling_price');
            $table->unsignedBigInteger('hardware_stock_id');
            $table->string('image_url');
            $table->foreign('hardware_stock_id')->references('id')->on('hardware_stocks')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('hardware_stock_details');
    }
}
