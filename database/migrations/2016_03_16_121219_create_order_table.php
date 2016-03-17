<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('shipping_id')->unsigned();
            $table->integer('download_link_id')->unsigned();
            $table->integer('no_of_product');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('telephone');
            $table->float('total_price');
            $table->boolean('status');
            $table->longText('custom_fields');
            $table->timestamps();
            $table->softDeletes();

            /**
             * Add Foreign/Unique/Index
             */
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('customer_id')->references('id')
                ->on('customer_detail')
                ->onDelete('cascade');

            $table->foreign('shipping_id')->references('id')
                ->on('shipping')
                ->onDelete('cascade');

          /* $table->foreign('download_link_id')->references('id')
                ->on('downloadable_link')
                ->onDelete('cascade');*/



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
        Schema::drop('order');
    }
}
