<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin',
            'email'=>'azharraihan6969@gmail.com',
            'password'=>bcrypt('azharraihan6969'),
        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'email'=>'author@blog.com',
            'password'=>bcrypt('author12345'),
        ]);
    }
}
