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
        Schema::create('firma', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('id_boss');
            $table->foreign('id_boss')->references('id')->on('cumparator');
            $table->string('nume_firma');
            $table->string('email_firma');
            $table->char('telefon_firma', 10);
            $table->string('adresa_firma');
            $table->string('judet');
            $table->string('reg_com');
            $table->string('cif');
            $table->string('cui');
            $table->string('banca_firma');
            $table->char('iban_firma', 24);
            $table->string('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firma');
    }
};
