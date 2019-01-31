<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function addProduct($post)
    {
        $product = new Product;
        $product->name_product = $post['nameProduct'];
        $product->vendor_code = $post['vendor_code'];
        $product->category = $post['value'];
        $product->new_flag = 1;
        $product->popular_flag = 0;
        $product->description = $post['description'];
        $product->save();
    }

    public static function getProduct($id)
    {
        return Product::find($id);
    }

    public static function editProduct($id, $post)
    {

        if ($post['new'] == 'new') {
            $status_new = 1;
        } else {
            $status_new = 0;
        }

        if ($post['pop'] == 'pop') {
            $status_pop = 1;
        } else {
            $status_pop = 0;
        }
        $product = Product::find($id);
        $product->name_product = $post['nameProduct'];
        $product->vendor_code = $post['vendor_code'];
        $product->new_flag = $status_new;
        $product->popular_flag = $status_pop;
        $product->description = $post['description'];
        $product->save();
    }

    public static function deleteProduct($id)
    {
        $obj = Product::find($id);
        $obj->delete();
    }

    public static function detProductByCategory($nameCategory)
    {
        return $obj = Product::where('category', '=', $nameCategory)->get();
    }

    public static function deleteProductByCategory($category)
    {
        Product::where('category', '=', $category)->delete();
    }

    public static function filterProduct($post)
    {
        if (isset($post['new_flag']) && isset($post['popular_flag'])) {
            return Product::where('new_flag', '=', 1)
                ->where('popular_flag', '=', 1)
                ->get();
        }
        if (isset($post['new_flag'])) {
            return Product::where('new_flag', '=', 1)
                ->where('popular_flag', '=', 0)
                ->get();
        }

        if (isset($post['popular_flag'])) {
            return Product::where('popular_flag', '=', 0)
                ->where('popular_flag', '=', 1)
                ->get();
        }
    }
    public static function filterCategory($post)
    {
        if (isset($post['category'])) {
            return Product::where('category', '=', $post['category'])
                ->get();
        }

    }
}
