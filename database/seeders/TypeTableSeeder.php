<?php

namespace Database\Seeders;

use App\Models\type;
use Illuminate\Database\Seeder;



class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        type::create([
            "name" => "Structure privée",
            "created_at" => "2022-03-07 14:28:24",
            "updated_at" => "2022-03-07 14:28:24"
        ]);
        type::create([
            "name" => "Université publique et centre universitaire",
            "created_at" => "2022-03-07 14:31:12",
            "updated_at" => "2022-03-07 14:31:12"
        ]);
        type::create([
            "name" => "Établissement Privé d'Enseignement Supérieur",
            "created_at" => "2022-03-07 14:35:57",
            "updated_at" => "2022-03-07 14:35:57"
        ]);
        type::create([
            "name" => "Structure publique et parapublique",
            "created_at" => "2022-03-07 14:42:10",
            "updated_at" => "2022-03-07 14:42:10"
        ]);
        type::create([
            "name" => "Collectivité locale",
            "created_at" => "2022-03-08 15:12:42",
            "updated_at" => "2022-03-08 15:12:42"
        ]);
    }
}
