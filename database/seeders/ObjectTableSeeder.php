<?php

namespace Database\Seeders;

use App\Models\objectPartener;
use Illuminate\Database\Seeder;

class ObjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        objectPartener::create([
            "name" => "Formation, recherche et mobilité",
            "created_at" => "2022-02-28 11:37:39",
            "updated_at" => "2022-02-28 11:37:39"
        ]);
        objectPartener::create([
            "name" => "Appui technique et matériel",
            "created_at" => "2022-02-28 11:37:47",
            "updated_at" => "2022-02-28 11:37:47"
        ]);
        objectPartener::create([
            "name" => "Appui technique et insertion professionnelle",
            "created_at" => "2022-02-28 11:37:53",
            "updated_at" => "2022-02-28 11:37:53"
        ]);
        objectPartener::create([
            "name" => "Formation, appui technique et insertion professionnelle",
            "created_at" => "2022-02-28 11:38:00",
            "updated_at" => "2022-02-28 11:38:00"
        ]);
        objectPartener::create([
            "name" => "Recherche et appui technique",
            "created_at" => "2022-02-28 11:38:09",
            "updated_at" => "2022-02-28 11:38:09"
        ]);
        objectPartener::create([
            "name" => "Formation et insertion professionnelle",
            "created_at" => "2022-02-28 11:38:17",
            "updated_at" => "2022-02-28 11:38:17"
        ]);
        objectPartener::create([
            "name" => "Formation et recherche",
            "created_at" => "2022-02-28 11:38:32",
            "updated_at" => "2022-02-28 11:38:32"
        ]);
        objectPartener::create([
            "name" => "Exploitation pour utilité publique",
            "created_at" => "2022-02-28 11:38:43",
            "updated_at" => "2022-02-28 11:38:43"
        ]);
        objectPartener::create([
            "name" => "Formation, recherche et insertion professionnelle",
            "created_at" => "2022-02-28 11:38:53",
            "updated_at" => "2022-02-28 11:38:53"
        ]);
        objectPartener::create([
            "name" => "Soutenance de thèse de Doctorat",
            "created_at" => "2022-02-28 11:39:02",
            "updated_at" => "2022-02-28 11:39:02"
        ]);
        objectPartener::create([
            "name" => "Formation,mobilité et appui technique",
            "created_at" => "2022-02-28 11:39:09",
            "updated_at" => "2022-02-28 11:39:09"
        ]);
        objectPartener::create([
            "name" => "Formation et appui technique",
            "created_at" => "2022-02-28 11:39:18",
            "updated_at" => "2022-02-28 11:39:18"
        ]);
        objectPartener::create([
            "id" => "20",
            "name" => "Appui technique",
            "created_at" => "2022-02-28 11:39:30",
            "updated_at" => "2022-02-28 11:39:30"
        ]);
        objectPartener::create([
            "name" => "Gestion des zones d'espaces publicitaires",
            "created_at" => "2022-02-28 11:39:38",
            "updated_at" => "2022-02-28 11:39:38"
        ]);
        objectPartener::create([
            "name" => "Recherche et promotion de l'agrobusiness",
            "created_at" => "2022-02-28 11:39:49",
            "updated_at" => "2022-02-28 11:39:49"
        ]);
        objectPartener::create([
            "name" => "Insertion professionnelle  et accompagnement des activités pédagogiques, culturelles et sportives",
            "created_at" => "2022-02-28 11:39:57",
            "updated_at" => "2022-02-28 11:39:57"
        ]);
        objectPartener::create([
            "name" => "Amélioration du cadre de vie",
            "created_at" => "2022-07-18 09:39:24",
            "updated_at" => "2022-07-18 09:39:24"
        ]);
        objectPartener::create([
            "name" => "ENSEIGNEMENT À L'ISMA, ENCADREMENT DES MEMORANTS, PARTICIPATION AUX JURYS DE SOUTENANCE, PARTICIPATION AUX COLLOQUES",
            "created_at" => "2022-07-22 11:00:11",
            "updated_at" => "2022-07-22 11:00:11"
        ]);
        objectPartener::create([
            "name" => "Prise en charge sanitaire",
            "created_at" => "2022-07-28 10:16:26",
            "updated_at" => "2022-07-28 10:16:26"
        ]);
        objectPartener::create([
            "name" => "Aménagement du territoire, développement durable et local, capitalisation, analyse des dynamiques territoriales et prospective, renforcement de l'ingénierie technique,",
            "created_at" => "2022-07-28 15:33:43",
            "updated_at" => "2022-07-28 15:33:43"
        ]);
        objectPartener::create([
            "name" => "Stage académique et professionnel",
            "created_at" => "2022-07-29 10:36:42",
            "updated_at" => "2022-07-29 10:36:42"
        ]);
        objectPartener::create([
            "name" => "Recherche et Développement",
            "created_at" => "2022-07-29 12:29:57",
            "updated_at" => "2022-07-29 12:29:57"
        ]);
    }
}
