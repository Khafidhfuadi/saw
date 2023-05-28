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
        Schema::create('m_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedInteger('previlage_id')->nullable();
            $table->foreign('previlage_id')->references('id')->on('m_previlage');
            $table->unsignedInteger('jabatan_id')->nullable();
            $table->foreign('jabatan_id')->references('id')->on('m_jabatan');
            $table->unsignedInteger('departement_id')->nullable();
            $table->foreign('departement_id')->references('id')->on('m_departement');
            $table->unsignedInteger('kategori_pegawai_id')->nullable();
            $table->foreign('kategori_pegawai_id')->references('id')->on('m_kategori_pegawai');
            //add join_date based current timestamp
            $table->timestamp('join_date')->useCurrent();
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
