<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\UsersModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UsersModel::create([
            "name" => "admin",
            "email" => "admin",
            "password" => Hash::make('bismillahadmin'),
            "role" => "admin"
        ]);
    }
}
