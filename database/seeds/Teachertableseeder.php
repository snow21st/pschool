<?php

use Illuminate\Database\Seeder;

class Teachertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create(['name'=>'10th']);
    }
}
