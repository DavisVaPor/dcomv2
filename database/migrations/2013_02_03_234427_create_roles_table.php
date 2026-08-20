<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('activo')->default(true);
        });

        // Insertar datos iniciales
        DB::table('rols')->insert([
        ['name' => 'Administrador'],
        ['name' => 'Usuario'],
        ['name' => 'Supervisor'],
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols');
    }

    
    
};
