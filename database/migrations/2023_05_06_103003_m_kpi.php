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
        // 	kpi_id ()	kpi_nama	max_score_kpi	jenis_kpi_id	kpi_aktif
        Schema::create('m_kpi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kpi_nama');
            $table->integer('max_score_kpi');
            $table->unsignedInteger('jenis_kpi_id')->nullable();
            $table->foreign('jenis_kpi_id')->references('id')->on('m_jenis_kpi');
            $table->boolean('kpi_aktif')->default(true);
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
