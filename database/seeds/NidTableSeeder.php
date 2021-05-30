<?php

use Illuminate\Database\Seeder;
use App\NidCard;

class NidTableSeeder extends Seeder
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

    	NidCard::create([

    		'nid'=>'0987654322',
    		'name'=>'Mary B. Moore',
    		'father'=>'B. Moore',
    		'mother' => 'Mary B.',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'4518 Argonne',
    		'address'=>'14561 Argonne Street Philadelphia, WW 645465',
    		'blood_group'=>'B+',
            'photo'=>'2.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654323',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'3.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654324',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'4.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654325',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'5.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654326',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'6.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654327',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'7.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654328',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'8.jpg'
    	]);

    	NidCard::create([

    		'nid'=>'0987654329',
    		'name'=>'jhon doe',
    		'father'=>'doe jhon',
    		'mother' => 'Doe Mary',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'blood_group'=>'B-',
            'photo'=>'9.jpg'
    	]);
    }
}
