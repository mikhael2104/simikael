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
        Schema::create('ajuan_pkls', function (Blueprint $table) {
            $table->id('id_ajuan');
            $table->foreignId('id_siswa')
                ->constrained('siswas', 'id_siswa')
                ->onDelete('cascade');
            $table->foreignId('id_industri')
                ->constrained('industris', 'id_industri')
                ->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamp('tanggal_pengajuan')->nullable();
            $table->enum('status', ['pending', 'disetujui', 'ditolak']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajuan_pkls');
    }
};
