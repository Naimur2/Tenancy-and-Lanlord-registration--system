<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord_driver_infos', function (Blueprint $table) {
            $table->id();
            $table->string('l_nid',100);
            $table->string('l_driver_name',100);
            $table->string('l_driver_nid',100);
            $table->string('l_driver_phone',100);
            $table->string('l_driver_prmt_addss',100); 
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
        Schema::dropIfExists('landlord_driver_infos');
    }
}
