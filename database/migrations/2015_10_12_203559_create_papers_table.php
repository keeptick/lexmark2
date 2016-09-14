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
			$table->string('size',35);
            $table->text('description');
            $table->string('dimension',25);
            $table->string('unit',25);
			$table->decimal('price_mono',5,2);
			$table->decimal('price_colored',5,2);
			$table->foreign("company_id")->references("id")->on("companies")->onUpdate("cascade")->onDelete("cascade");
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
