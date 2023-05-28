<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // kpi_pegawai_id	pegawai_id	kpi_id	kpi_nama	score
        Schema::create('m_kpi_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id')->nullable();
            $table->foreign('pegawai_id')->references('id')->on('m_pegawai');
            $table->unsignedInteger('kpi_id')->nullable();
            $table->foreign('kpi_id')->references('id')->on('m_kpi');
            $table->string('kpi_nama');
            $table->integer('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
