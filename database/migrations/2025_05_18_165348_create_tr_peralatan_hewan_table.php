<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tr_peralatan_hewan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hewan_id')->constrained('tr_hewan')->onDelete('cascade');
            $table->foreignId('peralatan_id')->constrained('mst_peralatan')->onDelete('cascade');
            $table->text('keterangan')->nullable();
            $table->boolean('wajib')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tr_peralatan_hewan');
    }
};