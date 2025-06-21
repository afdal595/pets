<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrMakananRasTable extends Migration
{
    public function up()
    {
        Schema::create('tr_makanan_ras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ras_id')->constrained('mst_ras')->onDelete('cascade');
            $table->foreignId('makanan_id')->constrained('mst_makanan')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tr_makanan_ras');
    }
}
