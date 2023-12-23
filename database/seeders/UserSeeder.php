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
        ];
        $users_profile =[
            [
                "profile_image"=>"sticker-e-robot.png",
                "cover_image"=> "sticker-e-robot.png",
                "bio"=> "Admin of E-Robot",
                "user_id"=>1,
            ],
        ];
        DB::table('users')->insert($users);
        DB::table('user_profiles')->insert($users_profile);
    }
}
