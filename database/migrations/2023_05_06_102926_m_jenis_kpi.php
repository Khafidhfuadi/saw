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
        //jenis_kpi_id	jenis_kpi_nama	attitude_aktif
        Schema::create('m_jenis_kpi', function (Blueprint $table) {
            $table->increments('id');

            $table->string('jenis_kpi_nama');
            $table->boolean('attitude_aktif')->default(true);
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
