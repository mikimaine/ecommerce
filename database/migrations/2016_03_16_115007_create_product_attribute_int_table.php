<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAttributeIntTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_attribute_int', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('product_attribute_id')->unsigned();
            $table->integer('value');
            $table->timestamps();

            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('product_attribute_id')->references('id')
                ->on('product_attribute')
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
        Schema::drop('product_attribute_int');
    }
}
