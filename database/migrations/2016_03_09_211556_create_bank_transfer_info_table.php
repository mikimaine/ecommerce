<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransferInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('bank_transfer_info', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('bank_name');
            $table->string('bank_account_no');
            $table->string('support_phone');
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::drop('bank_transfer_info');
    }
}
