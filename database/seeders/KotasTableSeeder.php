<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kota;

class KotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabupaten = ['Bangkalan','Banyuwangi','Blitar','Bojonegoro','Bondowoso','Gresik','Jember','Jombang','Kediri','Lamongan','Lumajang','Madiun','Magetan','Malang','Mojokerto','Nganjuk','Ngawi','Pacitan','Pamekasan','Pasuruan','Ponorogo','Probolinggo','Sampang','Sidoarjo','Situbondo','Sumenep','Trenggalek','Tuban','Tulungagung'];
        $kota = ['Batu','Blitar','Kediri','Madiun','Malang','Mojokerto','Pasuruan','Probolinggo','Surabaya'];
        foreach ($kabupaten as $key => $value) {
            kota::create([
                'nama' => 'Kabupaten '.$value
            ]);
        }

        foreach ($kota as $key => $value) {
            kota::create([
                'nama' => 'Kota '.$value
            ]);
        }
        
    }
}
