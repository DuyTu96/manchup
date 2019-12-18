<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'category_id' => 1,
                'name' => 'Product'.$i,
                'product_code' => 'PRD'.$i,
                'price' => '1234',
                'price_sale' => '123',
                'description' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'content' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'new' => 1,
                'highlight' => 1,
            ]);
        }
    }
}
