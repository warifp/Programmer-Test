<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $mahasiswa = [
            [
                'name' => 'Hasan Nur Rahim',
                'nim' => '10.2020.01',
                'nilai_id' => '8',
                'mata_kuliah_id' => '2',
            ],
            [
                'name' => 'Halim Mustaqim',
                'nim' => '10.2020.02',
                'nilai_id' => '6',
                'mata_kuliah_id' => '4',
            ],
            [
                'name' => 'Dori Harsa',
                'nim' => '10.2020.03',
                'nilai_id' => '8',
                'mata_kuliah_id' => '6',
            ],
            [
                'name' => 'Chandra Hadi Winata',
                'nim' => '10.2020.04',
                'nilai_id' => '6',
                'mata_kuliah_id' => '5',
            ],
            [
                'name' => 'Indah Dewi Pertiwi',
                'nim' => '10.2020.05',
                'nilai_id' => '8',
                'mata_kuliah_id' => '3',
            ],
            [
                'name' => 'Joko Winarno',
                'nim' => '10.2020.06',
                'nilai_id' => '7',
                'mata_kuliah_id' => '5',
            ],
            [
                'name' => 'Dori Harsa',
                'nim' => '10.2020.07',
                'nilai_id' => '2',
                'mata_kuliah_id' => '5',
            ],
        ];

        DB::table('mahasiswa')->insert($mahasiswa);
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
