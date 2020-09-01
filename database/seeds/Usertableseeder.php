<?php

use Illuminate\Database\Seeder;
use App\User;

class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $teacher= User::create([
        	'name'=>'Daw Mya',
        	'email'=>'dawmya@gmail.com',
        	'password'=>Hash::make('dawmya')
    	]);
       $teacher->assignRole('Teacher');

    	$student= User::create([
        	'name'=>'Aye Aye',
        	'email'=>'ayeaye@gmail.com',
        	'password'=>Hash::make('ayeaye')
    	]);

    	$student->assignRole('Student');
    }
}
