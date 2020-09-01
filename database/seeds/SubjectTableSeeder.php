<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::create(['name'=>'Myanmar','grade_id'=>1]);
        Model::create(['name'=>'English','grade_id'=>1]);
        Model::create(['name'=>'Math','grade_id'=>1]);
        Model::create(['name'=>'Physics','grade_id'=>1]);
        Model::create(['name'=>'Chemistry','grade_id'=>1]);
        Model::create(['name'=>'Biology','grade_id'=>1]);
    }
}
