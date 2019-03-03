<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storesJsonFile = File::get('database/data/stores.json');
        $storesJsonFeed = json_decode($storesJsonFile, 1);

        foreach($storesJsonFeed as $storeItem) {
            DB::table('stores')->insert([
                'name_lower' => $storeItem['nameLower'],
                'name' => $storeItem['name']
            ]);
        }

    }
}
