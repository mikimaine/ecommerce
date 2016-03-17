<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('wish_list', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            /**
             * Add Foreign/Unique/Index
             */
            $table->foreign('customer_id')->references('id')
                ->on('customer_detail')
                ->onDelete('cascade');
            $table->foreign('product_id')->references('id')
                ->on('products')
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
        Schema::down('wish_list');
    }
}
