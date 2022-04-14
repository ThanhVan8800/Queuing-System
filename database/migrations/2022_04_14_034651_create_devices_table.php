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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('id_device',100);
            $table->string('device_name',150);
            $table->string('ip_address',150);
            $table->string('service_use',255);
            $table->string('type',100);
            $table->string('user_name');
            $table->string('password');
            $table->string('status')->nullable();
            $table->string('status_connect')->nullable();

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
        Schema::dropIfExists('devices');
    }
};
