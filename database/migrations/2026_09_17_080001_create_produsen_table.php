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
        Schema::create('produsen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pabrik');
            $table->string('nama_barang');
            $table->enum('jenis_barang', [
                'makanan',
                'minuman',
                'snack',
                'sembako',
                'alat_mandi',
                'alat_kebersihan',
                'perawatan_tubuh',
                'obat_obatan',
                'alat_tulis',
                'peralatan_rumah_tangga',
                'pakaian',
                'elektronik',
                'aksesoris'
            ]);
            $table->string('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produsen');
    }
};
