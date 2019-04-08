<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
    		[
    			'name'=>'luong',
    			'email'=>'lecongluong1997@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>2
    		],
    		[
    			'name'=>'admin',
    			'email'=>'admin@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>1
    		]
    	];
        DB::table('user')->insert($data);
    }
}
