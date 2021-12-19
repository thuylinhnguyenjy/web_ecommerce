<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Jinyang', 
            'email' => 'tuonglinh0218@gmail.com',
            'phone' => '0123456789', 
            'address' => 'Bình Thuận', 
            'password' => bcrypt('123456'),
            'avatar' => 'avatar_jinyang.jpg',
         ];
         DB::table('user')->insert($data);
    }
}
