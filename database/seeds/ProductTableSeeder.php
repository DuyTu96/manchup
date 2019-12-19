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
        for ($i = 1; $i < 10; $i++) {
            DB::table('products')->insert([
                'category_id' => $i,
                'name' => 'Product'.$i,
                'product_code' => 'PRD'.$i,
                'price' => '999000',
                'price_sale' => '899000',
                'image' => '/image/product-default.jpg',
                'description' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'content' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'new' => 1,
                'highlight' => 1,
            ]);
        }
        for ($i = 1; $i < 10; $i++) {
            DB::table('products')->insert([
                'category_id' => $i,
                'name' => 'Product'.($i+9),
                'product_code' => 'PRD'.($i+9),
                'price' => '999000',
                'price_sale' => '899000',
                'image' => '/image/product-default.jpg',
                'description' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'content' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'new' => 1,
                'highlight' => 1,
            ]);
        }
        for ($i = 1; $i < 10; $i++) {
            DB::table('products')->insert([
                'category_id' => $i,
                'name' => 'Product'.($i+18),
                'product_code' => 'PRD'.($i+18),
                'price' => '999000',
                'price_sale' => '899000',
                'image' => '/image/product-default.jpg',
                'description' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'content' => 'Trong ví dụ cuối cùng, các bạn có thể thấy thay vì gọi đến method create() như trước đây thì tôi lại gọi method make(). Đây là hai method thực hiện hai chức năng hoàn toàn khác nhau',
                'new' => 1,
                'highlight' => 1,
            ]);
        }
    }
}
