<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('category');
            $table->smallInteger('type');
            $table->decimal('price', 12, 2);
            $table->date('dtpayment');
            $table->date('dtexpiration');
            $table->smallInteger('status');
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
        Schema::dropIfExists('expenses');
    }
}
