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
            $table->unsignedBigInteger('id_facturac')->nullable();
            $table->unsignedBigInteger('id_facturaf')->nullable();
            $table->unsignedBigInteger('id_produs');
            
            $table->double('pret_produs', 10, 2)->unsigned();
            $table->double('pret_tva',10,2)->unsigned();
            $table->integer('cantitate_produs')->unsigned();

            $table->foreign('id_facturac')->references('id')->on('facturac');
            $table->foreign('id_facturaf')->references('id')->on('facturaf');
            $table->foreign('id_produs')->references('id')->on('produs');
            $table->timestamps();
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
