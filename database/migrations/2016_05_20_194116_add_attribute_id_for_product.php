<?php

use Illuminate\Database\Migrations\Migration;

class AddAttributeIdForProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function ($table) {
            $table->integer('attribute_category_id')->unsigned();

            $table->foreign('attribute_category_id')->references('id')
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
    }
}
