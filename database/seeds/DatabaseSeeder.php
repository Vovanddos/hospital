<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	Role::create(['name'=>'doctor']);
    	Role::create(['name'=>'admin']);
    	Role::create(['name'=>'patient']);
        //         $this->call(UserSeeder::class);
//
//        User::create([
//            'name'=>'Admin',
//            'email'=>'admin@gmail.com',
//            'password'=>Hash::make('admin@gmail.com'),
//            'role_id'=>2,
//            'gender'=>'male'
//
//        ]);

        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin@gmail.com'),
                'role_id'=>2,
                'gender'=>'male'
            ),
            array(
                'name'=>'Doctor',
                'email'=>'doctor@gmail.com',
                'password'=>Hash::make('doctor@gmail.com'),
                'role_id'=>1,
                'gender'=>'male'
            ),
        );

        DB::table('users')->insert($data);


    }
}
