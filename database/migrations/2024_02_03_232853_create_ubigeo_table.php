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
        Schema::create('ubigeos', function (Blueprint $table) {
            $table->id();
            $table->string('region', 45);
            $table->string('provincia', 50);
            $table->string('distrito', 50);
        });

        // Insertar datos iniciales
        DB::table('ubigeos')->insert([
            ['id' => '10101', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Chachapoyas'],
            ['id' => '10102', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Asunción'],
            ['id' => '10103', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Balsas'],
            ['id' => '10104', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Cheto'],
            ['id' => '10105', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Chiliquin'],
            ['id' => '10106', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Chuquibamba'],
            ['id' => '10107', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Granada'],
            ['id' => '10108', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'Huancas'],
            ['id' => '10109', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => 'La Jalca'],
            ['id' => '10110', 'region' => 'Amazonas', 'provincia' => 'Chachapoyas', 'distrito' => "Leimebamba"],
            ['id' => '10111', 'region' => 'Amazonas', 'provincia' => "Chachapoyas", "distrito" => "Levanto"],
            ['id' => "10112", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Magdalena"],
            ['id' => "10113", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Mariscal Castilla"],
            ['id' => "10114", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Molinopampa"],
            ['id' => "10115", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Montevideo"],
            ['id' => "10116", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Olleros"],
            ['id' => "10117", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Quinjalca"],
            ['id' => "10118", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "San Francisco de Daguas"],
            ['id' => "10119", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "San Isidro de Maino"],
            ['id' => "10120", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Soloco"],
            ['id' => "10121", 'region' => "Amazonas", "provincia" => "Chachapoyas", "distrito" => "Sonche"],
            ['id' => "10201", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "Bagua"],
            ['id' => "10202", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "Aramango"],
            ['id' => "10203", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "Copallin"],
            ['id' => "10204", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "El Parco"],
            ['id' => "10205", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "Imaza"],
            ['id' => "10206", 'region' => "Amazonas", "provincia" => "Bagua", "distrito" => "La Peca"],

            ['id' => "10301", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Jumbilla"],
            ['id' => "10302", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Chisquilla"],
            ['id' => "10303", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Churuja"],
            ['id' => "10304", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Corosha"],
            ['id' => "10305", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Cuispes"],
            ['id' => "10306", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Florida"],
            ['id' => "10307", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Jazan"],
            ['id' => "10308", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Recta"],
            ['id' => "10309", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "San Carlos"],
            ['id' => "10310", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Shipasbamba"],
            ['id' => "10311", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Valera"],
            ['id' => "10312", 'region' => "Amazonas", "provincia" => "Bongara", "distrito" => "Yambrasbamba"],

            ['id' => "10401", 'region' => "Amazonas", "provincia" => "Condorcanqui", "distrito" => "Nieva"],
            ['id' => "10402", 'region' => "Amazonas", "provincia" => "Condorcanqui", "distrito" => "El Cenepa"],
            ['id' => "10403", 'region' => "Amazonas", "provincia" => "Condorcanqui", "distrito" => "Rio Santiago"],

            ['id' => "10501", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Lamud"],
            ['id' => "10502", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Camporredondo"],
            ['id' => "10503", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Cocabamba"],
            ['id' => "10504", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Colcamar"],
            ['id' => "10505", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Conila"],
            ['id' => "10506", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Inguilpata"],
            ['id' => "10507", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Longuita"],
            ['id' => "10508", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Lonya Chico"],
            ['id' => "10509", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Luya"],
            ['id' => "10510", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Luya Viejo"],
            ['id' => "10511", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Maria"],
            ['id' => "10512", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Ocalli"],
            ['id' => "10513", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Ocumal"],
            ['id' => "10514", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Pisuquia"],
            ['id' => "10515", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Providencia"],
            ['id' => "10516", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "San Cristobal"],
            ['id' => "10517", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "San Francisco del Yeso"],
            ['id' => "10518", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "San Jeronimo"],
            ['id' => "10519", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "San Juan de Lopecancha"],
            ['id' => "10520", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Santa Catalina"],
            ['id' => "10521", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Santo Tomas"],
            ['id' => "10522", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Tingo"],
            ['id' => "10523", 'region' => "Amazonas", "provincia" => "Luya", "distrito" => "Trita"],

            ['id' => "10601", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "San Nicolas"],
            ['id' => "10602", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Chirimoto"],
            ['id' => "10603", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Cochamal"],
            ['id' => "10604", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Huambo"],
            ['id' => "10605", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Limabamba"],
            ['id' => "10606", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Longar"],
            ['id' => "10607", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Mariscal Benavides"],
            ['id' => "10608", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Milpuc"],
            ['id' => "10609", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Omia"],
            ['id' => "10610", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Santa Rosa"],
            ['id' => "10611", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Totora"],
            ['id' => "10612", 'region' => "Amazonas", "provincia" => "Rodriguez de Mendoza", "distrito" => "Vista Alegre"],

            ['id' => "10701", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Bagua Grande"],
            ['id' => "10702", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Cajaruro"],
            ['id' => "10703", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Cumba"],
            ['id' => "10704", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "El Milagro"],
            ['id' => "10705", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Jamalca"],
            ['id' => "10706", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Lonya Grande"],
            ['id' => "10707", 'region' => "Amazonas", "provincia" => "Utcubamba", "distrito" => "Yamon"],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeo');
    }
};
