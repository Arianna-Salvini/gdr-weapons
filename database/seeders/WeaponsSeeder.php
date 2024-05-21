<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weapon;



class WeaponsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = 'config/db-weapons.json';
        $json = file_get_contents($path);
        $weapons = json_decode($json, true);

        foreach ($weapons as $weapon) {

            $item = new Weapon;
            $item->name = $weapon['name'];
            $item->slug = $weapon['slug'];
            $item->type = $weapon['type'];
            $item->category = $weapon['category'];
            $item->weight = $weapon['weight'];
            $item->cost = $weapon['cost'];
            $item->damage_dice = $weapon['damage_dice'];
            $item->save();
        }
    }
}
