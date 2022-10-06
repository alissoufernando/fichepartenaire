<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partenaire_id')->constrained('partenaires')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('other_info_id')->constrained('other_infos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('activitie_id')->constrained('activities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('object_partener_id');
            $table->string('year_signature');
            $table->string('year_collect')->nullable();
            $table->mediumText('suggestions')->nullable();
            $table->mediumText('difficults')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
