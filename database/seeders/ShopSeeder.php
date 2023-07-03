<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedShops = [
            ['id'=>1, 'name'=>'UNKNOWN','country_id'=>1,],
            ['name'=>'Toy World, Midland, WA','country_id'=>36,],
            ['name'=>'Toy World, Bunbury, WA','country_id'=>36,],
            ['name'=>'Toys-r-Us','country_id'=>826,],
            ['name'=>'Big W, Midland, WA','country_id'=>36,],
            ['name'=>'K-Mark, Midland, WA','country_id'=>36,],
        ];

        foreach ($seedShops as $seedShop) {
            Shop::create($seedShop);
        }
    }
}
