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
        Schema::create('smd_msdispenser', function (Blueprint $table) {
            $table->string('dis_id')->primary(); // Declare dis_id as primary key
            $table->string('dis_no_dispenser');
            $table->integer('dis_access');
            $table->integer('dis_ketersediaan');
            $table->string('dis_lantai');
            $table->string('dis_lokasi');
            $table->integer('dis_status');
            $table->string('dis_create_by');
            $table->string('dis_modify_by');
            $table->date('dis_create_at');
            $table->date('dis_modify_at');
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
        //
    }
};
