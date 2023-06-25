<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoslovnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poslovnicas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('place')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_tima')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('poslovnicas');
    }
}
