<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(

            array(
                array(
                    'id' => 1,
                    'name' => 'Hardware'
                ),

                array(
                    'id' => 2,
                    'name' => 'Software'
                ),
                array(
                    'id' => 3,
                    'name' => 'Smartphone'
                ),
                array(
                    'id' => 4,
                    'name' => 'Developpement'
                )
            )

        );
    }
}
