<?php

use Illuminate\Database\Seeder;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lectures')->insert(
    		[
    			[
    				'id'=>1,
    				'name'=>'First Snow Fall',
    				'image'=>'c1.jpg',
                    'id_level'=>'1',
    				//'level'=>'Level 1 - Beginner',
    				'status'=>1
    			],
    			[
    				'id'=>2,
    				'name'=>'Jessica\'s First Day of School',
    				'image'=>'c2.jpg',
                     'id_level'=>'1',
    				//'level'=>'Level 1 - Beginner',
    				'status'=>1
    			],
    			[
    				'id'=>3,
    				'name'=>'My Flower Garden',
    				'image'=>'c3.jpg',
                     'id_level'=>'1',
    				//'level'=>'Level 1 - Beginner',
    				'status'=>1
    			],
    			[
    				'id'=>4,
    				'name'=>'Going Camping',
    				'image'=>'c4.jpg',
                     'id_level'=>'1',
    				//'level'=>'Level 1 - Beginner',
    				'status'=>1
    			]
    		]
    	);

    }
}
