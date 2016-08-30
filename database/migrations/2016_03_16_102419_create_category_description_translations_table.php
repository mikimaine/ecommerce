<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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

            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('category_description_id', 'c_d_t_foreign')->references('id')
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
