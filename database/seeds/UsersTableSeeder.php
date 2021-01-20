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
                    'password' => 'root1234',
                    'is_admin' => 1
                ),

                array(
                    'id' => 2,
                    'name' => 'john',
                    'email' => 'john.doe@gmoil.com',
                    'password' => '123456',
                    'is_admin' => 0
                )
            )

        );
    }
}
