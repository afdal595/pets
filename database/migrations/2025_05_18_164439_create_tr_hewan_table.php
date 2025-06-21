<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tr_hewan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ras_id')->constrained('mst_ras')->onDelete('cascade');
            $table->string('nama', 100);
            $table->text('biografi')->nullable();
            $table->string('gambar_utama')->nullable();
            $table->integer('umur_min_perawatan')->nullable()->comment('Dalam bulan');
            $table->integer('umur_max_perawatan')->nullable()->comment('Dalam bulan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tr_hewan');
    }
};