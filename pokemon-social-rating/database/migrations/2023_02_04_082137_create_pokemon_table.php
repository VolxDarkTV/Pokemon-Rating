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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();

            $table -> integer('pokedex_n') -> unsigned() -> unique();
            $table -> string('img_link');
            $table -> string('name');
            $table -> string('sex') -> nullable(true);
            $table -> string('type');
            $table -> string('type_weakness');
            $table -> string('height');
            $table -> string('weight');
            $table -> string('ability');
            $table -> string('category');
            $table -> integer('lv') -> unsigned();
            $table -> text('description');


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
        Schema::dropIfExists('pokemon');
    }
};
