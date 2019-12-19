<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Màn chụp người lớn',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Màn chụp trẻ em',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Màn chụp khung',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 1,
            'name' => 'Màn chụp tự bung',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 3,
            'name' => 'Màn khung không khoan tường',
        ]);
        DB::table('categories')->insert([
            'parent_id' => 3,
            'name' => 'Màn khung khoan tường',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 1,
            'name' => 'Màn võng',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 1,
            'name' => 'Màn tuyn',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 2,
            'name' => 'Màn công chúa - hoàng tử',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 1,
            'name' => 'Màn bổ sung',
        ]);
    }
}
