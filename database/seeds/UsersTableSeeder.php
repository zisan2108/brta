<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\NidCard;
use App\Passport;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        // DB::table('identity_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $examinerRole = Role::where('name','examiner')->first();
        $parts_checkerRole = Role::where('name','parts_checker')->first();
        $police_stationRole = Role::where('name','police_station')->first();
        $trafficRole = Role::where('name','traffic')->first();
        $nativeRole = Role::where('name','native')->first();
        $foreignRole = Role::where('name','foreign')->first();

        $nid=NidCard::where('id','1')->first();
        $nid1=NidCard::where('id','2')->first();
        $nid2=NidCard::where('id','3')->first();
        $nid3=NidCard::where('id','4')->first();
        $nid4=NidCard::where('id','5')->first();
        $nid5=NidCard::where('id','6')->first();
        $pass=Passport::where('id','1')->first();


        $admin = User::create([
        	'name' => 'Admin User',        	
        	'email' => 'admin@gmail.com',
        	'phone' => '01700000000',
        	'password' => bcrypt('password')
        ]);

        $examiner = User::create([
        	'name' => 'Examiner', 	
        	'email' => 'examiner@gmail.com',
        	'phone' => '0170076000',
        	'password' => bcrypt('password')
        ]);

        $parts_checker = User::create([
        	'name' => 'Parts Checker',
        	'email' => 'parts@gmail.com',
        	'phone' => '0199000000',
        	'password' => bcrypt('password')
        ]);

        $police_station = User::create([
        	'name' => 'Police Station',
        	'email' => 'police@gmail.com',
        	'phone' => '0177700000',
        	'password' => bcrypt('password')
        ]);

        $traffic = User::create([
        	'name' => 'Traffic Police',
        	'email' => 'traffic@gmail.com',
        	'phone' => '01900000000',
        	'password' => bcrypt('password')
        ]);

        $native = User::create([
        	'name' => 'Abid',
        	'email' => 'adid@gmail.com',
        	'phone' => '01701200000',
        	'password' => bcrypt('password')
        ]);

        $foreign = User::create([
        	'name' => 'Jhon Doe',
        	'email' => 'jhon@gmail.com',
        	'phone' => '01100000000',
        	'password' => bcrypt('password')
        ]);



        $admin->roles()->attach($adminRole);
        $examiner->roles()->attach($examinerRole);
        $parts_checker->roles()->attach($parts_checkerRole);
        $police_station->roles()->attach($police_stationRole);
        $traffic->roles()->attach($trafficRole);
        $native->roles()->attach($nativeRole);
        $foreign->roles()->attach($foreignRole);

        $admin->nid_card()->save($nid);
        $examiner->nid_card()->save($nid1);
        $parts_checker->nid_card()->save($nid2);
        $police_station->nid_card()->save($nid3);
        $traffic->nid_card()->save($nid4);
        $native->nid_card()->save($nid5);
        $foreign->passport()->save($pass);



    }
}

