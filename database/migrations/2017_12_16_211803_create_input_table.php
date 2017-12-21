<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->text('description')->nullable();
            $table->date('dtpayment');
            $table->date('dtexpiration');
            $table->decimal('price', 12, 2);
            $table->smallInteger('category')->nullable();
            $table->smallInteger('status')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('church_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('church_id')->references('id')->on('churchs');
            $table->timestamps();
            $table->softDeletes();
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
