<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tr_galeri_hewan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hewan_id')->constrained('tr_hewan')->onDelete('cascade');
            $table->string('judul', 100);
            $table->string('gambar');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tr_galeri_hewan');
    }
};