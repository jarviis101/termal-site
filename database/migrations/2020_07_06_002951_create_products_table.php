<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name_ru');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('price');
            $table->string('category_id');
            $table->string('slug');
            $table->string('image');
            $table->text('description_ru');
            $table->text('description_ua');
            $table->text('description_en');
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
