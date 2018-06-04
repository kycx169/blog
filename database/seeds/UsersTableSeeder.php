<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //general 3 users/author
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => 'Mai Doe',
                'email' => 'mai@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => 'Lane Doe',
                'email' => 'lane@gmail.com',
                'password' => bcrypt('123123')
            ],
        ]);
    }
}
