<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::table('num_lvs', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('device_id')->references('id')->on('devices');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('num_lvs', function (Blueprint $table) {
            //
        });
    }
};
