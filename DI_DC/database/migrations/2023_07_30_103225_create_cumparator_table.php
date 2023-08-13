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
        Schema::create('cumparator', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
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
            //https://wise.com/ro/iban/romania
            $table->string('status'); //adica daca o sa fie pfa/srl/sa 
            /*
            dar daca adaugam o optiune in care intrebam daca are firma cand completeaza factura?
            si dupa care sa fie o sectiune separata pentru asta
            si la fel si in baza de date sa fie o tabela pentru firme
            si tabela pentru firma ii legata de id-ul cumparatorului
            iara in momentul in care se completeaza factura se face pe firma
            dar in acelasi timp noi avem si datele persoanei de la firma respectiva 
            care a venit si a cumparat
            si dupa daca seful de la firma stie ce angajat o fost responsabil de achizitionare
            intelegeti cum vreau sa zic?=)))))
            si no eventual nu colectam toate datele personale ale persoanei x de la firma y
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cumparator');
    }
};
