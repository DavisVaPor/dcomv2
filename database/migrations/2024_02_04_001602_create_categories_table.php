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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['name' => 'AISLANTES TÉRMICOS Y ACÚSTICOS, REFRACTARIOS, FILTROS Y PURIFICADORES'],
            ['name' => 'CLAVOS, PERNOS, TORNILLOS Y SUJETADORES'],
            ['name' => 'COMUNICACIONES Y TELECOMUNICACIONES'],
            ['name' => 'CONSTRUCCIONES  :   MATERIALES, RPTOS Y ACC'],
            ['name' => 'ELECTRICIDAD E ILUMINACIÓN'],
            ['name' => 'TELECOMUNICACIONES'],
            ['name' => 'EQUIPOS COMPUTACIONALES'],
            ['name' => 'MAQUINAS'],
            ['name' => 'MEDICION'],
            ['name' => 'MOBILIRIO'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
