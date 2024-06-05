<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = 'config/types.json';
        $json = file_get_contents($path);
        $types = json_decode($json, true);


        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->description = $type['desc'];
            $newType->save();
        }
    }
}
