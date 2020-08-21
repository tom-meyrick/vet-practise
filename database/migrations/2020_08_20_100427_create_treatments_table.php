<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string("name", 30); 
        });

        Schema::create('animal_treatment', function (Blueprint $table) {
            $table->id();
            //OwnerId col and foreign ID
            $table->foreignId("animal_id")->unsigned(); 
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade"); 
            //TreatmentId col and foreign ID
            $table->foreignId("treatment_id")->unsigned(); 
            $table->foreign("treatment_id")->references("id")->on("treatments")->onDelete("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_treatment'); 
        Schema::dropIfExists('treatments');
    }
}
