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
        //Crea una migracion con php con: php artisan make:migration create_students_table
        //ejecuta la migracion con php artisan migrate

        Schema::create('students', function (Blueprint $table) {
          //Definicion de la estrucutra de la tabla
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });
        //Esto crea fisicamente la tabla students en la base de datos
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }

};
