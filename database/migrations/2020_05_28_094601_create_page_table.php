<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('parent');
            $table->string('name',500);
            $table->string('title',1000);
            $table->string('descr',1000);
            $table->binary('en_menu');
            $table->binary('en_show');
            $table->binary('use_as_data');
            $table->integer('header');
            $table->integer('footer');
            $table->text('content');
            $table->text('code');
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
        Schema::dropIfExists('page');
    }
}
