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
        Schema::create('num_lvs', function (Blueprint $table) {
            $table->id();
            $table->integer('stt');
            $table->string('username_cus',155);
            $table->datetime('hsd');
            $table->string('status');
            $table->string('sdt');
            $table->string('email');
            $table->foreignId('service_id');
            $table->foreignId('device_id');
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
        Schema::dropIfExists('num_lvs');
    }
};
