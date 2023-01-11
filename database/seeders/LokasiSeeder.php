<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bandung Timur
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '1',
            'daerah' => 'Bandung Timur',
            'titik' => 'CITARUM',
        ]);
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '1',
            'daerah' => 'Bandung Timur',
            'titik' => 'TAMAN SARI',
        ]);

        //Bandung Barat
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '2',
            'daerah' => 'Bandung Barat',
            'titik' => 'CIJERAH',
        ]);
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '2',
            'daerah' => 'Bandung Barat',
            'titik' => 'GEMPOL SARI',
        ]);

        //Bandung Selatan
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '3',
            'daerah' => 'Bandung Selatan',
            'titik' => 'BATUNUNGGAL',
        ]);
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '3',
            'daerah' => 'Bandung Selatan',
            'titik' => 'MENGGER',
        ]);

        //Buah Batu
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '4',
            'daerah' => 'Buah Batu',
            'titik' => 'BUAH BATU',
        ]);

        // Kiaracondong
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '5',
            'daerah' => 'Kiaracondong',
            'titik' => 'KIARACONDONG',
        ]);
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '5',
            'daerah' => 'Kiaracondong',
            'titik' => 'CICAHEUM',
        ]);

        // Coblong
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '6',
            'daerah' => 'Coblong',
            'titik' => 'CIPAGANTI',
        ]);
        Lokasi::create([
            'id_kota'=> '1',
            'kota'=>'Bandung',
            'id_daerah' => '6',
            'daerah' => 'Coblong',
            'titik' => 'DAGO',
        ]);

        // Bekasi
        Lokasi::create([
            'id_kota'=> '2',
            'kota'=>'Bekasi',
            'id_daerah' => '7',
            'daerah' => 'Bekasi',
            'titik' => 'BEKASI KOTA',
        ]);

        // Jakarta Pusat
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '8',
            'daerah' => 'Jakarta Pusat',
            'titik' => 'GAMBIR',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '8',
            'daerah' => 'Jakarta Pusat',
            'titik' => 'SENEN',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '8',
            'daerah' => 'Jakarta Pusat',
            'titik' => 'TANAH ABANG',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '8',
            'daerah' => 'Jakarta Pusat',
            'titik' => 'MENTENG',
        ]);

        // Jakarta Utara
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '9',
            'daerah' => 'Jakarta Utara',
            'titik' => 'KELAPA GADING',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '9',
            'daerah' => 'Jakarta Utara',
            'titik' => 'ANCOL',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '9',
            'daerah' => 'Jakarta Utara',
            'titik' => 'TANJUNG PRIUK',
        ]);

        // Jakarta Timur
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '10',
            'daerah' => 'Jakarta Timur',
            'titik' => 'DUREN SAWIT',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '10',
            'daerah' => 'Jakarta Timur',
            'titik' => 'PONDOK KOPI',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '10',
            'daerah' => 'Jakarta Timur',
            'titik' => 'KRAMAT JATI',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '10',
            'daerah' => 'Jakarta Timur',
            'titik' => 'JATINEGARA',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '10',
            'daerah' => 'Jakarta Timur',
            'titik' => 'PULO GADUNG',
        ]);

        // Jakarta Barat
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '11',
            'daerah' => 'Jakarta Barat',
            'titik' => 'CENGKARENG',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '11',
            'daerah' => 'Jakarta Barat',
            'titik' => 'KEBON JERUK',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '11',
            'daerah' => 'Jakarta Barat',
            'titik' => 'GROGOL',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '11',
            'daerah' => 'Jakarta Barat',
            'titik' => 'PALMERAH',
        ]);

        // Jakarta Selatan
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '12',
            'daerah' => 'Jakarta Selatan',
            'titik' => 'CILANDAK',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '12',
            'daerah' => 'Jakarta Selatan',
            'titik' => 'KEBAYORAN BARU',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '12',
            'daerah' => 'Jakarta Selatan',
            'titik' => 'MAMPANG',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '12',
            'daerah' => 'Jakarta Selatan',
            'titik' => 'PANCORAN',
        ]);
        Lokasi::create([
            'id_kota'=> '3',
            'kota'=>'Jakarta',
            'id_daerah' => '12',
            'daerah' => 'Jakarta Selatan',
            'titik' => 'TEBET',
        ]);
    }
}
