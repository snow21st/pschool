<?php

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
         // $this->call(Gradetableseeder::class);
          //$this->call(Roletableseeder::class);
        // $this->call(Usertableseeder::class);
        $this->call(SubjectTableSeeder::class);
    }
}
