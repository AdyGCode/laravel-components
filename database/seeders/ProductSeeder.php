<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedProducts =
            [
               ['id'=>1000,'name'=>"40539 Ahsoka Tano",],
               ['id'=>1001,'name'=>"40623 Battle of Endor Heroes",],
               ['id'=>1002,'name'=>"75288 AT-AT",],
               ['id'=>1003,'name'=>"75292 The Razor Crest",],
               ['id'=>1004,'name'=>"75300 Imperial TIE Fighter",],
               ['id'=>1005,'name'=>"75301 Luke Skywalker's X-wing Fighter",],
               ['id'=>1006,'name'=>"75309 Republic Gunship",],
               ['id'=>1007,'name'=>"75312 Boba Fett's Starship",],
               ['id'=>1008,'name'=>"75317 The Mandalorian & The Child",],
               ['id'=>1009,'name'=>"75318 The Child",],
               ['id'=>1010,'name'=>"75320 Snowtrooper Battle Pack",],
               ['id'=>1020,'name'=>"75322 Hoth AT-ST",],
               ['id'=>1030,'name'=>"75323 The Justifier",],
               ['id'=>1040,'name'=>"75324 Dark Trooper Attack",],
               ['id'=>1050,'name'=>"75326 Boba Fett's Throne Room",],
               ['id'=>1060,'name'=>"75327 Luke Skywalker (Red Five) Helmet",],
               ['id'=>1070,'name'=>"75329 Death Star Trench Run Diorama",],
               ['id'=>1080,'name'=>"75330 Dagobah Jedi Training Diorama",],
               ['id'=>1090,'name'=>"75332 AT-ST",],
               ['id'=>1011,'name'=>"75333 Obi-Wan Kenobi's Jedi Starfighter",],
               ['id'=>1012,'name'=>"75334 Obi-Wan Kenobi vs. Darth Vader",],
               ['id'=>1013,'name'=>"75335 BD-1",],
               ['id'=>1014,'name'=>"75336 Inquisitor Transport Scythe",],
               ['id'=>1015,'name'=>"75338 Ambush on Ferrix",],
               ['id'=>1016,'name'=>"75339 Death Star Trash Compactor Diorama",],
               ['id'=>1021,'name'=>"75342 Republic Fighter Tank",],
               ['id'=>1022,'name'=>"75343 Dark Trooper Helmet",],
               ['id'=>1031,'name'=>"75344 Boba Fett's Starship Microfighter",],
            ];

        foreach ($seedProducts as $seedProduct) {
            Product::create($seedProduct);
        }

    }
}
