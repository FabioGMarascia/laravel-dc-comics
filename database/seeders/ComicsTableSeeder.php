<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config("store.comics");

        foreach ($comics as $comic) {
            DB::table('Comics')->insert([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
                'thumb' => $comic['thumb'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
