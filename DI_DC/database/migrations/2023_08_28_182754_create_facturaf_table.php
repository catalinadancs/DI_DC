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
        Schema::create('facturaf', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_firma');
            $table->foreign('id_firma')->references('id')->on('firma');
            $table->char('serie', 1);
            $table->dateTime('data_emitere');
            $table->dateTime('data_scadenta');
            $table->string('status');
            $table->string('nume_delegat');
            $table->string('serieCI_del');
            $table->string('nrCI_del')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturaf');
    }
};
