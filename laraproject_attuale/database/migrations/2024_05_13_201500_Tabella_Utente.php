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
    public function up(): void
    {
            Schema::create('Utente', function (Blueprint $table) {
                $table->string('Username', 256);
                $table->string('Password', 256);
                $table->enum('Tipo', ['Admin', 'Utente', 'Clinico']);
                $table->bigInteger('Ut_ID')->unsigned()->primary();
                // Indici
                $table->unique('Username');
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

 
   