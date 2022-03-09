<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefactorCategoryIdForeignKeyInHardwareStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hardware_stocks', function (Blueprint $table) {
            $table->dropForeign(['category_id']);

            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('hardware_categories')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hardware_stocks', function (Blueprint $table) {
            //
        });
    }
}
