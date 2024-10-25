<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('naive_bayes', function (Blueprint $table) {
            $table->id();
            $table->string('uniform');
            $table->float('hst');
            $table->string('texture');
            $table->string('is_dry');
            $table->string('is_dirty');
            $table->string('is_rotting');
            $table->string('is_damage');
            $table->float('moisture_content');
            $table->float('diameter');
            $table->tinyInteger('mutu_class');
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
        Schema::dropIfExists('naive_bayes');
    }
};
