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
        Schema::create('produs', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->string('denumire');
            $table->string('cod');
            $table->integer('tva')->unsigned();
            $table->string('um');
            $table->integer('cantitate')->unsigned();
            $table->double('pret_unitar', 10, 2)->unsigned();
            $table->string('moneda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produs');
    }
};
