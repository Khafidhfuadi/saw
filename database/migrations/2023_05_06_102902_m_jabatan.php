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
        // 	jabatan_id	jabatan_nama	jabatan_aktif
        Schema::create('m_jabatan', function (Blueprint $table) {
            $table->increments('id');

            $table->string('jabatan_nama');
            $table->boolean('jabatan_aktif')->default(true);
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
