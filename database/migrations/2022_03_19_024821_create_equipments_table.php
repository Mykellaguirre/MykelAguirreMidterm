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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('manufacturer_id');
            $table->foreignId('note_id');
            $table->string('price');
            $table->string('name');
            $table->string('invoice_id');
            $table->foreignId('type_id');
            $table->string('processor');
            $table->string('screen_size');
            $table->string('battery');
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
        Schema::dropIfExists('equipments');
    }
};
