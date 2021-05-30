<?php

use Illuminate\Database\Seeder;

class IdentityUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NidCard::truncate();
    	NidCard::create([

    		'nid'=>'0987654321',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'1.jpg'
    	]);
    }
}
