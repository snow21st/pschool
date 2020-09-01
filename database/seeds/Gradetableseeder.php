<?php

use Illuminate\Database\Seeder;

class Gradetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create(['name'=>'10th']);
        Grade::create(['name'=>'9th']);
        Grade::create(['name'=>'8th']);
        Grade::create(['name'=>'7th']);
    }
}
