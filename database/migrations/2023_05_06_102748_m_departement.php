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
        // departement_id	departement_nama	departement_aktif
        Schema::create('m_departement', function (Blueprint $table) {
            $table->increments('id');

            $table->string('departement_nama');
            $table->boolean('departement_aktif')->default(true);
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
