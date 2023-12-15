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
        Schema::create('smd_msSensor', function (Blueprint $table) {
            $table->string('sen_id')->primary(); // Declare dis_id as primary key
            $table->string('sen_nama');
            $table->integer('sen_status_pemakaian');
            $table->integer('sen_status');
            $table->string('create_by');
            $table->string('modify_by');
            $table->date('create_date');
            $table->date('modify_date');
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
