<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();
        $roles = [
            [
                'name' => 'Admin'
            ], [
                'name' => 'Employer'
            ], [
                'name' => 'Job seeker'
            ]
            ];

            foreach($roles as $role) {
                DB::table('roles')->insert([
                    'name' => $role['name'],
                    'created_at' => Carbon::now(),
                ]);
            }
    }
}