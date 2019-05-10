<?php

use Illuminate\Database\Seeder;

class AudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('audios')->insert(
    		[
    			[
    				'id'=>1,
    				'name'=>'track 1',
    				'id_video'=>'1',
    				'link'=>'2.mp3',
    				'text'=>'aaaaaa'
    				
    			],
    			[
    				'id'=>2,
    				'name'=>'track 2',
    				'id_video'=>'1',
    				'link'=>'3.mp3',
    				'text'=>'bbb aaa'
    	
    			],
    			
    		]
    	);

    }
}
