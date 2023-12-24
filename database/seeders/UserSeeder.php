<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "first_name"=> "E-Robot",
                "last_name"=> "Admin",
                // "email"=>"@dmin_e_robot@gmail.com",
                "phone"=> "010567014",
                "password"=> bcrypt("E-Robot_@dmin"),
            ],
            [
                "first_name"=> "Tong",
                "last_name"=> "Meng",
                // "email"=>"@dmin_e_robot@gmail.com",
                "phone"=> "087544835",
                "password"=> bcrypt("E-Robot_@tongmeng"),
            ],
        ];
        $users_profile =[
            [
                "profile_image"=>"sticker-e-robot.png",
                "cover_image"=> "sticker-e-robot.png",
                "bio"=> "Admin of E-Robot",
                "user_id"=>1,
            ],
            [
                "profile_image"=>"sticker-e-robot.png",
                "cover_image"=> "sticker-e-robot.png",
                "bio"=> "Website Developer at E-Robot",
                "user_id"=>2,
            ],
        ];
        DB::table('users')->insert($users);
        DB::table('user_profiles')->insert($users_profile);
    }
}
