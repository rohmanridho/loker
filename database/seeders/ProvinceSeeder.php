<?php

namespace Database\Seeders;

use App\Models\Province;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Province::truncate();
        Schema::enableForeignKeyConstraints();

        $provinces = [
            ['name' => 'Aceh', 'slug' => 'aceh'],
            ['name' => 'Sumut', 'slug' => 'sumut'],
            ['name' => 'Sumbar', 'slug' => 'sumbar'],
            ['name' => 'Riau', 'slug' => 'riau'],
            ['name' => 'Kepulauan Riau', 'slug' => 'kepulauan-riau'],
            ['name' => 'Jambi', 'slug' => 'jambi'],
            ['name' => 'Bengkulu', 'slug' => 'bengkulu'],
            ['name' => 'Sumsel', 'slug' => 'sumsel'],
            ['name' => 'Bangka Belitung', 'slug' => 'bangka-belitung'],
            ['name' => 'Lampung', 'slug' => 'lampung'],
            ['name' => 'Banten', 'slug' => 'banten'],
            ['name' => 'Jakarta', 'slug' => 'jakarta'],
            ['name' => 'Jabar', 'slug' => 'jabar'],
            ['name' => 'Jateng', 'slug' => 'jateng'],
            ['name' => 'Yogyakarta', 'slug' => 'yogyakarta'],
            ['name' => 'Jatim', 'slug' => 'jatim'],
            ['name' => 'Bali', 'slug' => 'bali'],
            ['name' => 'NTB', 'slug' => 'ntb'],
            ['name' => 'NTT', 'slug' => 'ntt'],
            ['name' => 'Kalbar', 'slug' => 'kalbar'],
            ['name' => 'Kalteng', 'slug' => 'kalteng'],
            ['name' => 'Kalsel', 'slug' => 'kalsel'],
            ['name' => 'Kaltim', 'slug' => 'kaltim'],
            ['name' => 'Kalut', 'slug' => 'kalut'],
            ['name' => 'Sulbar', 'slug' => 'sulbar'],
            ['name' => 'Sulsel', 'slug' => 'sulsel'],
            ['name' => 'Sultra', 'slug' => 'sultra'],
            ['name' => 'Sulteng', 'slug' => 'sulteng'],
            ['name' => 'Gorontalo', 'slug' => 'gorontalo'],
            ['name' => 'Sulut', 'slug' => 'sulut'],
            ['name' => 'Malut', 'slug' => 'malut'],
            ['name' => 'Maluku', 'slug' => 'maluku'],
            ['name' => 'Papua Barat', 'slug' => 'papua-barat'],
            ['name' => 'Papua', 'slug' => 'papua'],
            ['name' => 'Papua Tengah', 'slug' => 'papua-tengah'],
            ['name' => 'Papua Pegunungan', 'slug' => 'papua-pegunungan'],
            ['name' => 'Papua Selatan', 'slug' => 'papua-selatan']
        ];

        foreach($provinces as $province) {
            Province::insert([
                'name' => $province['name'],
                'slug' => $province['slug'],
                'created_at' => Carbon::now()
            ]);
        }
    }
}