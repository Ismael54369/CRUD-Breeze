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
        Schema::create('pirates', function (Blueprint $table) {
            $table->id();
            
            // 1. String
            $table->string('name'); 
            
            // 2. String
            $table->string('crew'); 
            
            // 3. Enum (Lista cerrada)
            $table->enum('role', [
                'Capitán', 
                'Vicecapitán', 
                'Espadachín', 
                'Navegante', 
                'Francotirador', 
                'Cocinero', 
                'Médico', 
                'Arqueólogo', 
                'Carpintero', 
                'Músico', 
                'Timonel', 
                'Flota'
            ]);
            
            // 4. BigInteger (Entero grande para las recompensas millonarias)
            $table->bigInteger('bounty'); 
            
            // 5. Boolean (Verdadero/Falso)
            $table->boolean('has_fruit')->default(false); 
            
            // 6. Date (Fecha)
            $table->date('poster_date'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pirates');
    }
};
