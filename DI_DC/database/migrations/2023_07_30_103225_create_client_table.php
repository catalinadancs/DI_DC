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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('nume');
            $table->string('prenume');
            $table->string('email');
            $table->char('telefon', 10);
            $table->char('serieCI', 2);
            $table->char('numarCI', 6)->unique();
            $table->char('cnp', 13)->unique();
            $table->string('adresa');
            $table->string('banca');
            $table->char('iban', 24);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
