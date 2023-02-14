<?php

namespace App\Managers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductManager
{
    public function createProduct(Request $request)
    {
        DB::beginTransaction();

        $category = Category::create(
            [
                'name' => $request->get('name'),
                'slug' => $request->get('slug'),
                'description' => $request->get('description'),
                'image' => $request->get('image'),
                'status_id' => $request->get('status_id')
            ]);

        $productArray = $request->all() + ['category_id' => $category->id];

        $product = Product::Create($productArray);

        DB::commit();
    }

}
