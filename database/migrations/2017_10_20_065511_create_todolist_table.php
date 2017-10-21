<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist', function (Blueprint $table) {
            $table->integer('plan_id')->unsigned();
            $table->integer('do_id')->unsigned();
            
        });
                
        Schema::table('todolist', function ($table){
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('do_id')->references('id')->on('todos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todolist');
    }
}
