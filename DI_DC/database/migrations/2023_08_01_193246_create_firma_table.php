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
            $table->id();
            $table->string('nume');
            $table->string('email');
            $table->char('telefon', 10);
            $table->string('adresa');
            $table->string('judet');
            $table->string('reg_com');
            $table->string('cif');
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
        Schema::dropIfExists('firma');
    }
};
