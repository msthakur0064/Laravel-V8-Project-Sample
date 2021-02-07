<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('user')->insert([
            'id' => 1,
            'firstName' => 'First',
            'lastName' => 'User',
            'email' => 'first@user.com',
            'username' => 'first@user',
            'password' => Hash::make('Test@1234'),
            'emailVerifiedAt' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('user')->insert([
            'id' => 2,
            'firstName' => 'Second',
            'lastName' => 'User',
            'email' => 'second@user.com',
            'username' => 'second@user',
            'password' => Hash::make('Test@1234'),
            'emailVerifiedAt' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
