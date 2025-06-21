<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tr_galeri_hewan', function (Blueprint $table) {
            // Tambah kolom ras_id setelah kolom id
            $table->foreignId('ras_id')->after('id')->nullable()->constrained('mst_ras')->onDelete('cascade');
            // Buat kolom hewan_id menjadi nullable karena sekarang bisa terkait dengan ras atau hewan
            $table->foreignId('hewan_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('tr_galeri_hewan', function (Blueprint $table) {
            $table->dropForeign(['ras_id']);
            $table->dropColumn('ras_id');
            $table->foreignId('hewan_id')->nullable(false)->change();
        });
    }
};
