<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrPeralatanRasTable extends Migration
{
    public function up()
    {
        Schema::create('tr_peralatan_ras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ras_id')->constrained('mst_ras')->onDelete('cascade');
            $table->foreignId('peralatan_id')->constrained('mst_peralatan')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tr_peralatan_ras');
    }
}
