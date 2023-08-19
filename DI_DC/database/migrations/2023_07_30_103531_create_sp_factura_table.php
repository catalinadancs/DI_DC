<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sp_factura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_factura');
            $table->foreign('id_factura')->references('id')->on('factura');
            $table->unsignedBigInteger('id_produs');
            $table->foreign('id_produs')->references('id')->on('produs');
            $table->double('pret_produs', 10, 2)->unsigned();
            $table->integer('cantitate_produs')->unsigned();
            $table->dateTime('data_factura');
            $table->timestamps();
            /*
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_factura');
    }
};
