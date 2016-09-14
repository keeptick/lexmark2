<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("papers",function(Blueprint $table){
            $table->increments('id');
            $table->string('name',35)->unique();
            $table->string('description',25);
            $table->string('dimension',25);
            $table->string('unit',25);
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
        //
		Schema::drop("papers");
    }
}
