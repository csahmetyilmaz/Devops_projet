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
        DB::table('users')->insert(

            array(
                array(
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@support.com',
                    'password' => Hash::make('root1234'),
                    'is_admin' => 1
                ),
                array(
                    'id' => 1,
                    'name' => 'John',
                    'email' => 'johnDoe@gmail.com',
                    'password' => Hash::make('123456'),
                    'is_admin' => 0
                )


            )

        );
    }
}
