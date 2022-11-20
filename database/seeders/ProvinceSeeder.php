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
            ['name' => 'Aceh'],
            ['name' => 'Sumatra Utara'],
            ['name' => 'Sumatra Barat'],
            ['name' => 'Riau'],
            ['name' => 'Kepulauan Riau'],
            ['name' => 'Jambi'],
            ['name' => 'Bengkulu'],
            ['name' => 'Sumatra Selatan'],
            ['name' => 'Kepulauan Bangka Belitung'],
            ['name' => 'Lampung'],
            ['name' => 'Banten'],
            ['name' => 'DKI Jakarta'],
            ['name' => 'Jawa Barat'],
            ['name' => 'Jawa Tengah'],
            ['name' => 'Daerah Istimewa Yogyakarta'],
            ['name' => 'Jawa Timur'],
            ['name' => 'Bali'],
            ['name' => 'Nusa Tenggara Barat'],
            ['name' => 'Nusa Tenggara Timur'],
            ['name' => 'Kalimantan Barat'],
            ['name' => 'Kalimantan Tengah'],
            ['name' => 'Kalimantan Selatan'],
            ['name' => 'Kalimantan Timur'],
            ['name' => 'Kalimantan Utara'],
            ['name' => 'Sulawesi Barat'],
            ['name' => 'Sulawesi Selatan'],
            ['name' => 'Sulawesi Tenggara'],
            ['name' => 'Sulawesi Tengah'],
            ['name' => 'Gorontalo'],
            ['name' => 'Sulawesi Utara'],
            ['name' => 'Maluku Utara'],
            ['name' => 'Maluku'],
            ['name' => 'Papua Barat'],
            ['name' => 'Papua'],
            ['name' => 'Papua Tengah'],
            ['name' => 'Papua Pegunungan'],
            ['name' => 'Papua Selatan']
        ];

        foreach($provinces as $province) {
            Province::insert([
                'name' => $province['name'],
                'created_at' => Carbon::now()
            ]);
        }
    }
}
