<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Progressions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('progressions', function (Blueprint $table) {
        $table->increments('id')->autoIncrement();
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->boolean('prologue')->default(0);
        $table->boolean('lubeck')->default(0);
        $table->boolean('visby')->default(0);
        $table->boolean('danzig')->default(0);
        $table->boolean('riga')->default(0);
        $table->boolean('epilogue')->default(0);
        
        $table->boolean('setsail1')->default(0);
        $table->boolean('setsail2')->default(0);
        $table->boolean('setsail3')->default(0);

        $table->boolean('prologuenameage')->default(0);
        $table->boolean('lubeckstory')->default(0);
        $table->tinyInteger('lubeckchoice')->default(0);

        $table->boolean('visbybattleship')->default(0);
        $table->boolean('visbyboatrepair')->default(0);

        $table->boolean('danzighanoi')->default(0);
        $table->boolean('danzigmemory')->default(0);

        $table->boolean('rigaquiz')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progressions');
    }
}
