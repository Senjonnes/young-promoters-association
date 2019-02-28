<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dates');
            $table->integer('membersavings');
            $table->integer('entrancefees');
            $table->integer('instalment');
            $table->integer('fines');
            $table->integer('shop');
            $table->integer('expendictures');
            $table->integer('loan');
            $table->integer('balance');
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
}
