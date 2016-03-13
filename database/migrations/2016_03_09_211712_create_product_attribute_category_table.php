<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */#
    public function up()
    {
        //
        Schema::create('product_attribute_category', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('attribute_set_name');
            $table->timestamps();

            /**
             * Add Foreign/Unique/Index
             */

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
        Schema::drop('product_attribute_category');

    }
}
