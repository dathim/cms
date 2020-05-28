<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatafieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datafields', function (Blueprint $table) {
            $table->id();
            $table->integer('data');
            $table->string('name',100);
            $table->string('datetype',100);
            $table->string('enname',100);       
            $table->string('parameters',1000); 
            $table->binary('in_table');       
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
        Schema::dropIfExists('datafields');
    }
}
