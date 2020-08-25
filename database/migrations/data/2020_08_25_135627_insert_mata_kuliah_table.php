<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $mata_kuliah = [
            [
                'name' => 'Sistem Informasi',
            ],
            [
                'name' => 'Teknik Informatika',
            ],
            [
                'name' => 'Ilmu Komputer',
            ],
            [
                'name' => 'Pertambangan',
            ],
            [
                'name' => 'Perhotelan',
            ],
            [
                'name' => 'Industri',
            ],
            [
                'name' => 'Teknik Sipil',
            ],
            [
                'name' => 'Hukum',
            ],
            [
                'name' => 'Ekonomi',
            ],
        ];

        DB::table('mata_kuliah')->insert($mata_kuliah);
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
