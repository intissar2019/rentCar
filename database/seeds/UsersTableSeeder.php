<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
		
		'email'=>'intissar.klach.hajjaj@gmail.com',
		'password'=>bcrypt('intissar'),
		'firstName'=>'intissar',
		'lastName'=>'Admin',
		'address'=>'Tunis',
		'phone'=>'2533645',
		'role_id'=>1
	]);
    }
}
