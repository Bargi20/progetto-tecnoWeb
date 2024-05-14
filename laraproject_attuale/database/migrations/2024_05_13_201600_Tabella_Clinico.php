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
        Schema::create('Clinico', function (Blueprint $table) {
            $table->string('Nome', 256);
            $table->string('Cognome', 256);
            $table->date('DataDiNascita');
            $table->string('Ruolo', 256);
            $table->string('Specializzazione', 256);
            $table->bigInteger('ID')->primary()->unsigned();
            // Vincolo esterno
            $table->foreign('ID')->references('Ut_ID')->on('Utente')->onDelete('cascade')->onUpdate('cascade');
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

