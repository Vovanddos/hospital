<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin@gmail.com'),
                'role'=>'admin',
            ),
            array(
                'name'=>'Doctor',
                'email'=>'doctor@gmail.com',
                'password'=>Hash::make('doctor@gmail.com'),
                'role'=>'doctor',
            ),
        );

//        DB::table('users')->insert($data);

        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin@gmail.com'),
            'role'=>'admin',
        ]);
    }
}
