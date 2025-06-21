<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconToMstJenisHewanTable extends Migration
{
    public function up()
    {
        Schema::table('mst_jenis_hewan', function (Blueprint $table) {
            $table->string('icon')->default('other')->after('deskripsi');
        });
    }

    public function down()
    {
        Schema::table('mst_jenis_hewan', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
};
