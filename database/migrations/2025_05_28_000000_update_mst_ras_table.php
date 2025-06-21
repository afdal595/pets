<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMstRasTable extends Migration
{
    public function up()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->text('perawatan')->nullable()->after('karakteristik');
        });
    }

    public function down()
    {
        Schema::table('mst_ras', function (Blueprint $table) {
            $table->dropColumn('perawatan');
        });
    }
};
