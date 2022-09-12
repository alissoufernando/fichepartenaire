<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('entitled');
            $table->string('year_of_execution');
            $table->foreignId('partner_id')->constrained('partners')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('uac_structure_id')->constrained('uac_structures')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('uac_entitie_id')->constrained('uac_entities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('unite')->nullable();
            $table->string('resultat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
