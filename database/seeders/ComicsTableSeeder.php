<?php


namespace Database\Seeders;

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('Comics')->insert([
                'title' => $faker->name,
                'description' => $faker->paragraph(2),
                'price' => $faker->randomFloat(2, 20, 30),
                'series' => $faker->words(3, true),
                'sale_date' => $faker->dateTime(),
                'type' => $faker->randomElement(['action', 'fantasy', 'romance']),
                'artists' => $faker->firstNameMale(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
