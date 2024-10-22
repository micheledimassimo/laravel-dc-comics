<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $newcomic = new Comic();
            $newcomic->comic_name = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->src = $comic['thumb'];
            $explodedPrice = explode('$', $comic['price']);
            $newcomic->price = floatval($explodedPrice[1]);
            $newcomic->series = $comic['series'];
            $newcomic->type = $comic['type'];
            $newcomic->save();
        }
    }
}
