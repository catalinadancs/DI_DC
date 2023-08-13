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
        Schema::create('furnizor', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nume');
            $table->string('prenume');
            //$table->string('cui');
            //https://www.contzilla.ro/cif-cui-nr-registrul-comertului/
            $table->string('email');
            $table->char('telefon', 10);
            $table->char('serieCI', 2);
            $table->char('numarCI', 6)->unique();
            $table->char('cnp', 13)->unique();
            $table->string('adresa');
            $table->string('banca');
            $table->char('iban', 24);
            $table->timestamps();
            /*
            Nullability refers to the ability of a column to accept NULL values.
            nullable()
            putem seta unele atribute sa fie nule in functie de ce se completeaza in
                momentul in care se face o inregistrare noua
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('furnizor');
    }
};
