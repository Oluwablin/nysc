<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ward_id')->nullable();
            $table->unsignedInteger('lga_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            // $table->foreign('ward_id')->references('id')->on('wards')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            $table->foreign('lga_id')->references('id')->on('l_g_a_s')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('states')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('citizens');
    }
}
