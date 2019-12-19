<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([            
            'size' => '80*120cm',
        ]);

        DB::table('sizes')->insert([            
            'size' => '90*120cm',
        ]);

        DB::table('sizes')->insert([            
            'size' => '1m6*2m',
        ]);

        DB::table('sizes')->insert([            
            'size' => '1m8*2m',
        ]);

        DB::table('sizes')->insert([            
            'size' => '2m*2m2',
        ]);
    }
}
