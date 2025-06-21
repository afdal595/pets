<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGambarToMstRasTable extends Migration
{
    public function up()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('karakteristik');
        });
    }

    public function down()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }
};
