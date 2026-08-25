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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

         // Insertar datos iniciales
        DB::table('systems')->insert([
        ['name' => 'SISTEMA DE RECEPCION'],
        ['name' => 'SISTEMA DE TRANSMISION TV'],
        ['name' => 'SISTEMA DE TRANSMISION RADIO'],
        ['name' => 'TORRE'],
        ['name' => 'SISTEMA PAT'],
        ['name' => 'SISTEMA FOTOVOLTAICO']]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
};
