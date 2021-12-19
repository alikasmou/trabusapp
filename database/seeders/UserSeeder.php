<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname'=>'Ali Kamsou',
            "photo_url" => 'https://i.pravatar.cc/300',
            "identity_number" => "99923227145",
            "birthday"=>'1993-10-9 13:27:29',
            "phone" => "905541811507",
            "username" => 'alikasmou',
            "email" => "alikasmou@gmail.com",
            "email_verified_at" => "2021-12-04 13:27:29",
            'password' => 'password',
            'client_type_id'=> 3
        ]);
        User::create([
            'fullname'=>'Teacher Teacher',
            "photo_url" => 'https://i.pravatar.cc/300',
            "identity_number" => "99931227145",
            "birthday"=>'1993-10-9 13:27:29',
            "phone" => "905541811508",
            "username" => 'teacher',
            "email" => "teacher@gmail.com",
            "email_verified_at" => "2021-12-04 13:27:29",
            'password' => 'password',
            'client_type_id'=> 2
        ]);
        User::create([
            'fullname'=>'Student Student',
            "photo_url" => 'https://i.pravatar.cc/300',
            "identity_number" => "99231227145",
            "birthday"=>'1993-10-9 13:27:29',
            "phone" => "905541811509",
            "username" => 'student',
            "email" => "student@gmail.com",
            "email_verified_at" => "2021-12-04 13:27:29",
            'password' => 'password',
            'client_type_id'=> 1
        ]);
    }
}
