<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Import the data from the comics.php file
        $comics = require database_path('seeders/comics.php');

        // Convert arrays to JSON format
        foreach ($comics as &$comic) {
            $comic['artists'] = implode(", ", $comic['artists']);
            $comic['writers'] = implode(", ", $comic['writers']);
        }

        // Insert the data into the comics table
        DB::table('comics')->insert($comics);
    }
}
