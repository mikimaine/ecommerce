<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDescriptionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_description_translations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('category_description_id')->unsigned();
            $table->string('locale');
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            /**
             * Add Foreign/Unique/Index
             */
            $table->foreign('description_id')->references('id')
                ->on('category_description')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('category_description_translations');

    }
}
