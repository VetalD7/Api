<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductsSeeder
 */
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('product_string')->truncate();
        $products  = json_decode(file_get_contents(resource_path('seeds/Product/product.json')),true);
        $productLang  = json_decode(file_get_contents(resource_path('seeds/Product/productlang.json')), true);

        foreach ($products as $key => $product) {
            if ($key !== 0) {
                $model =   \App\Models\Product\Product::firstOrNew(['id' => $key]);
                $model->link = $product['link'];
                $model->status = $product['status'];
                $model->publication_at = $product['publication_at'];
                $data = $model->save();

                $modelString =   \App\Models\Product\Product::firstOrNew(['article_id' => $articleModel->id]);

                $modelString->product_id = $articleModel->id;
                $modelString->lang = 'en';
                $modelString->title = $productLang[$key]['title'];
                $modelString->description = $productLang[$key]['description'];
                $modelString->content = $productLang[$key]['content'];
                $modelString->save();
            }




        }

    }
}
