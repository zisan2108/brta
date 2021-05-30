<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
    	Role::create(['name'=>'admin']);
    	Role::create(['name'=>'examiner']);
    	Role::create(['name'=>'parts_checker']);
    	Role::create(['name'=>'police_station']);
    	Role::create(['name'=>'traffic']);
    	Role::create(['name'=>'native']);
    	Role::create(['name'=>'foreign']);
    }
}
