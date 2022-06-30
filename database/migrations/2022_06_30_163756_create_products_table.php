<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('details_id');
            $table->unsignedBigInteger('image_id');
            $table->enum('status', ['new', 'old']);
            $table->foreign('stock_id')->references('id')->on('hardware_stocks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('details_id')->references('id')->on('hardware_stock_details')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('image_id')->references('id')->on('images')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('products');
    }
}
