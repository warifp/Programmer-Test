<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nilai = [
            [
                'name' => '10',
            ],
            [
                'name' => '20',
            ],
            [
                'name' => '30',
            ],
            [
                'name' => '40',
            ],
            [
                'name' => '50',
            ],
            [
                'name' => '60',
            ],
            [
                'name' => '70',
            ],
            [
                'name' => '80',
            ],
            [
                'name' => '90',
            ],
        ];

        DB::table('nilai')->insert($nilai);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
