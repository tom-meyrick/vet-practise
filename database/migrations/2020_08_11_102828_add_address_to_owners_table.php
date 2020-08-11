<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
          $table->string('address_1', 200)->nullable(); 
          $table->string('address_2', 200)->nullable();
          $table->string('town', 200)->nullable(); 
          $table->string('postcode', 50)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
          $table->dropColumn('address_1'); 
          $table->dropColumn('address_2');
          $table->dropColumn('town'); 
          $table->dropColumn('postcode'); 
        });
    }
}
