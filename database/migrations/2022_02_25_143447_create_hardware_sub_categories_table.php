<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_category_id');
            $table->string('name');
            $table->string('description');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->foreign('main_category_id')->references('id')->on('hardware_categories')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('hardware_sub_categories');
    }
}
