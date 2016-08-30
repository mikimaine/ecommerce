
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('parent_id')->nullable();
            $table->string('image');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();

            /*
             * Add Foreign/Unique/Index

            $table->foreign('parent_id')->references('id')
                ->on('category')
                ->onDelete('cascade');

             **/
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
        Schema::drop('category');
    }
}
