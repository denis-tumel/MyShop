<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => srt_random(10), 'email' => srt_random(10).'@gmail.com', 'password' => bcrypt('secret'),]);
    }
}
