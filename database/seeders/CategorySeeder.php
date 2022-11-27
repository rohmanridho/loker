<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $categories = [
            [
                'name' => 'Manager',
                'slug' => 'manager',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Staf',
                'slug' => 'staf',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Profesional',
                'slug' => 'profesional',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Spesialis',
                'slug' => 'spesialis',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Magang',
                'slug' => 'magang',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Asisten',
                'slug' => 'asisten',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Direktur',
                'slug' => 'direktur',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Kontrak',
                'slug' => 'kontrak',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Remote',
                'slug' => 'remote',
                'created_at' => Carbon::now()
            ]
        ];

        foreach($categories as $category) {
            Category::insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'created_at' => $category['created_at']
            ]);
        }
    }
}