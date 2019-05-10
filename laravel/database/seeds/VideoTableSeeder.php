<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert(
    		[
    			[
    				'id'=>1,
    				'name'=>'First Snow Fall',
    				'link'=>'example.mp4',
    				//'level'=>'Level 1 - Beginner',
    				'description'=>'First Snow Fall',
    				'time'=>'01:00',
    				'id_lecture'=>'1'
    				
    			],
    			[
    				'id'=>2,
    				'name'=>'Jessica\'s First Day of School',
    				'link'=>'example.mp4',
    				//'level'=>'Level 1 - Beginner',
    				'description'=>'First Snow Fall',
    				'time'=>'01:00',
    				'id_lecture'=>'2'
    			],
    			[
    				'id'=>3,
    				'name'=>'My Flower Garden',
    				'link'=>'example.mp4',
    				//'level'=>'Level 1 - Beginner',
    				'description'=>'First Snow Fall',
    				'time'=>'01:00',
    				'id_lecture'=>'3'
    			],
    			[
    				'id'=>4,
    				'name'=>'Going Camping',
    				'link'=>'example.mp4',
    				//'level'=>'Level 1 - Beginner',
    				'description'=>'First Snow Fall',
    				'time'=>'01:00',
    				'id_lecture'=>'4'
    				
    			]
    		]
    	);

    }
}
