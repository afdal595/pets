<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mst_ras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_hewan_id')->constrained('mst_jenis_hewan')->onDelete('cascade');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->text('karakteristik')->nullable();
            $table->string('gambar_thumbnail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mst_ras');
    }
};
