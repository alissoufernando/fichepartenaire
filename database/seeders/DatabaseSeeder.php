<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\TypeTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\ObjectTableSeeder;
use Database\Seeders\EntitieTableSeeder;
use Database\Seeders\PartenaireTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            RoleTableSeeder::class,
            UserTableSeeder::class,
            EntitieTableSeeder::class,
            ObjectTableSeeder::class,
            PartenaireTableSeeder::class,
            StructureTableSeeder::class,
            TypeTableSeeder::class,
        ]);

    }
}
