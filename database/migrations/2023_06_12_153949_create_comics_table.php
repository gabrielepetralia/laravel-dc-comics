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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('slug');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price', 10);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 20);
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();

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
        Schema::dropIfExists('comics');
    }
};
