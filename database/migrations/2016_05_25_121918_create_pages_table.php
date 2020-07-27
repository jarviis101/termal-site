<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: use JSON data type for 'extras' instead of string
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template');
            $table->string('name');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('title_ua');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ua')->nullable();
            $table->text('additional_content_ru')->nullable();
            $table->text('additional_content_en')->nullable();
            $table->text('additional_content_ua')->nullable();
            $table->text('extras')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
