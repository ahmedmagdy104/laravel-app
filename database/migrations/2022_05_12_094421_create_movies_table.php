<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('movieyear');
            $table->text('describe');
            $table->string('lang');
            $table->string('trailer',255);
            $table->string('type',10);
            $table->enum('quality',['lously','good','excellent']);
            $table->enum('status',['soon','active','unactive']);
            $table->string('rate_imbd',10);
            $table->string('image',255);
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
        Schema::dropIfExists('movies');
    }
};
