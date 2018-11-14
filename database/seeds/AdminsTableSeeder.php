<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Use Query Builder
            /*DB::table('admins')->insert([
                'name'      => str_random(10),
                'email'     => str_random(10).'@gmail.com',
                'job_title' => str_random(10),
                'password'  => bcrypt('secret')
            ]);*/

            //Use Eloquent v1
            /*\App\Admin::create([
                'name'	=> str_random(20),
                'email'	=> str_random(10) . '@gmail.com',
                'job_title' => str_random(10),
                'password'	=> bcrypt('secret')
            ]);*/

            //Use Eloquent v2
            \App\Admin::create([
                'name'	=> 'Bagus',
                'email'	=> 'b.surya@mail.ugm.ac.id',
                'job_title' => 'staf',
                'password'	=> bcrypt('secret')
            ]);

            //Use Model sqlite_factories
            //factory(\App\Admin::class, 5)->create();
    }
}
