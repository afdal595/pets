<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToMstRasTable extends Migration
{
    public function up()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->foreignId('makanan_id')->nullable()->constrained('mst_makanan')->onDelete('set null');
            $table->foreignId('peralatan_id')->nullable()->constrained('mst_peralatan')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->dropForeign(['makanan_id']);
            $table->dropForeign(['peralatan_id']);
            $table->dropColumn(['makanan_id', 'peralatan_id']);
        });
    }
};
