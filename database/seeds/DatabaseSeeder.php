<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(MovieCastSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(MovieDirectionSeeder::class);
        $this->call(ReviewerSeeder::class);
        $this->call(MovieGenresSeeder::class);
        $this->call(RatingSeeder::class);
    }
}
