<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $userModel = new User();
        $userModel->password = Hash::make(123456789);
        $userModel->email = "admin@admin.com";
        $userModel->save();
    }
}
