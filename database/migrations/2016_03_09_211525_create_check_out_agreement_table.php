<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckOutAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('check_out_agreement', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->longText('content');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            /*
             * Add Foreign/Unique/Index
             */
            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
         * Remove Foreign/Unique/Index
         */
        Schema::table('check_out_agreement', function (Blueprint $table) {
            $table->dropUnique('check_out_agreement_name_unique');
        });

        Schema::drop('check_out_agreement');
    }
}
