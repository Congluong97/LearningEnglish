<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('levels')->insert(
    		[
    			[
    				'id'=>1,
    				'name'=>'Beginner',
    				'id_lecture'=>1
    				
    			],
    			[
    				'id'=>2,
                    'name'=>'Elementary',
                    'id_lecture'=>2
    			],
    			[
    				'id'=>3,
    				'name'=>'Pre-Intermediate',
                    'id_lecture'=>3
    			],
    			[
    				'id'=>4,
    				'name'=>'Intermediate',
                    'id_lecture'=>4
    			]
                
    		]
    	);

    }
}
