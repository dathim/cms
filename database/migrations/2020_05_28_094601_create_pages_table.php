<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('parent');
            $table->string('name',500);
            $table->string('path',500);
            $table->string('title',1000)->nullable();
            $table->string('descr',1000)->nullable();
            $table->boolean('en_menu');
            $table->boolean('en_show');
            $table->boolean('use_as_data');
            $table->integer('design')->nullable();
            $table->integer('subdesign')->nullable();
            $table->text('content')->nullable();
            $table->text('code')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
