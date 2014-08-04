<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::truncate();
        
        User::create([
            'username' => 'alvinjay',
            'email' => 'accosare@up.edu.ph',
            'password' => 'password',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        User::create([
            'username' => 'ariettejune',
            'email' => 'aryetcosare@spc.edu.ph',
            'password' => 'tabachingching',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
