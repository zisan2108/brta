<?php

use Illuminate\Database\Seeder;
use App\Passport;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passport::truncate();
    	Passport::create([

    		'passport'=>'1122B39988',
    		'name'=>'Claude',
    		'father'=>'G. Ramirez',
    		'mother' => 'G. Claude',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'nationality'=>'Japan',
    		'blood_group'=>'A-',
            'photo'=>'10.jpg'
    	]);

    	Passport::create([

    		'passport'=>'112P33998Z',
    		'name'=>'Claude',
    		'father'=>'G. Ramirez',
    		'mother' => 'G. Claude',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'nationality'=>'Japan',
    		'blood_group'=>'A-',
            'photo'=>'11.jpg'
    	]);

    	Passport::create([

    		'passport'=>'11N2339Y88',
    		'name'=>'Claude',
    		'father'=>'G. Ramirez',
    		'mother' => 'G. Claude',
    		'birth_date'=> '1995-11-24',
    		'birth_place'=>'Philadelphia, DE 19103',
    		'address'=>'4518 Argonne Street Philadelphia, DE 19103',
    		'nationality'=>'Japan',
    		'blood_group'=>'A-',
            'photo'=>'12.jpg'
    	]);
    }
}
