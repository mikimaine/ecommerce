<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_attribute', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_category_id')->unsigned();
            $table->string('title');
            $table->boolean('notnull')->default(true);
            $table->string('datatype');
            $table->timestamps();

            /**
             * Add Foreign/Unique/Index
             */
            $table->foreign('product_category_id')->references('id')
                ->on('product_attribute_category')
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
        Schema::drop('product_attribute');
    }
}
