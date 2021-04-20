<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class TriggerBersihTempesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER clear_tem_pesan AFTER INSERT ON detail_pesan
            FOR EACH ROW
            BEGIN
            DELETE FROM temp_pembelian;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER clear_tem_pesan');
    }
}