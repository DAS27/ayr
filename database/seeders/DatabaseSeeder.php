<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\ActorMovie;
use App\Models\Director;
use App\Models\Genre;
use App\Models\GenreMovie;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Director::factory(5)->create();
         Genre::factory(20)->create();
         Actor::factory(20)->create();
         Movie::factory(20)->create();
         ActorMovie::factory(20)->create();
         GenreMovie::factory(20)->create();
    }
}
