<?php

public function up()
{
    Schema::table('mst_users', function (Blueprint $table) {
        $table->string('name')->after('id'); // atau posisi yang diinginkan
    });
}