<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkdein')->nullable();
            $table->string('skype')->nullable();
            $table->string('nationality')->nullable();
            $table->string('experience')->nullable();
            $table->string('project')->nullable();
            $table->string('customer')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
            $table->string('cv')->nullable(); 
            $table->string('image')->nullable(); 
            $table->text('about')->nullable(); 
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
        Schema::dropIfExists('infos')->nullable();
    }
}
