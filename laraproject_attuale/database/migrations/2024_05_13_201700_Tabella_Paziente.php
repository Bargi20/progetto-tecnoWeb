<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paziente', function (Blueprint $table) {
            $table->string('Nome', 256);
            $table->string('Cognome', 256);
            $table->date('DataDiNascita');
            $table->enum('Genere', ['M', 'F', 'Altro']);
            $table->text('Indirizzo');
            $table->string('Telefono', 10);
            $table->string('Email', 256);
            $table->bigInteger('ID_Paziente')->primary()->unsigned();
            $table->text('Terapia');
            $table->integer('NumeroTerapia');
            $table->bigInteger('ID_Clinico')->unsigned();


            // Vincoli esterni
            $table->foreign('ID_Paziente')->references('Ut_ID')->on('Utente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ID_Clinico')->references('ID')->on('Clinico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};

