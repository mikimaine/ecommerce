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
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('sku');
            $table->integer('category_id')->unsigned();
            $table->integer('tax_id')->unsigned();
            $table->float('price',8,3);
            $table->float('previous_price',8,3);
            $table->string('currency');
            $table->string('img_big');
            $table->string('img_medium');
            $table->string('img_small');
            $table->integer('stock');
            $table->boolean('live');
            $table->string('location');
            $table->boolean('unlimited');
            $table->boolean('is_downloadable');
            $table->timestamps();
            $table->softDeletes();

            /**
             * Add Foreign/Unique/Index
             */
            $table->foreign('category_id')->references('id')
                ->on('category')
                ->onDelete('cascade');

            $table->foreign('tax_id')->references('id')
                ->on('tax')
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
        Schema::drop('products');
    }
}
