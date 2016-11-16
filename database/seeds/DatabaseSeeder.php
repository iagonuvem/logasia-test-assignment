<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserting data at Vehicles_type table
        DB::table('vehicles_type')->insert([
            'description' => 'Semi-trailer truck',
        ]);
        DB::table('vehicles_type')->insert([
            'description' => '20 foot swap-body truck',
        ]);
        DB::table('vehicles_type')->insert([
            'description' => '28.5 foot pup trailer',
        ]);

        // Inserting data at Vehicles
        DB::table('vehicles')->insert([
            'description' => 'Semi-trailer truck 1',
            'vehicles_type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'description' => 'Semi-trailer truck 2',
            'vehicles_type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'description' => 'Semi-trailer truck 3',
            'vehicles_type_id' => 1
        ]);
        DB::table('vehicles')->insert([
            'description' => '20 foot swap-body truck 1',
            'vehicles_type_id' => 2
        ]);
        DB::table('vehicles')->insert([
            'description' => '20 foot swap-body truck 2',
            'vehicles_type_id' => 2
        ]);
        DB::table('vehicles')->insert([
            'description' => '20 foot swap-body truck 3',
            'vehicles_type_id' => 2
        ]);

		DB::table('vehicles')->insert([
            'description' => '20 foot swap-body truck 4',
            'vehicles_type_id' => 2
        ]);

		DB::table('vehicles')->insert([
            'description' => '28.5 foot pup trailer 1',
            'vehicles_type_id' => 3
        ]);
        DB::table('vehicles')->insert([
            'description' => '28.5 foot pup trailer 2',
            'vehicles_type_id' => 3
        ]);
        DB::table('vehicles')->insert([
            'description' => '28.5 foot pup trailer 3',
            'vehicles_type_id' => 3
        ]);
        DB::table('vehicles')->insert([
            'description' => '28.5 foot pup trailer 4',
            'vehicles_type_id' => 3
        ]);
        DB::table('vehicles')->insert([
            'description' => '28.5 foot pup trailer 5',
            'vehicles_type_id' => 3
        ]);

    }
}
