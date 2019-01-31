<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function showProduct()
    {
        if (isset($_POST['create'])) {
            return redirect()->action('ProductController@createProduct');
        }
        $allCategory = Category::all();
        $allProduct = Product::all();
        return view('product.showProduct', compact('allProduct', 'allCategory'));
    }

    public function createProduct()
    {
        $allCategory = Category::all();
        if (isset($_POST['create'])) {
            Product::addProduct($_POST);
        }
        return view('product.createProduct', compact('allCategory'));
    }

    public function oneCategoryProduct($id)
    {
        $product = Product::getProduct($id);

        return view('product.oneCategoryProduct', compact('product'));
    }

    public function editProduct($id)
    {
        if(isset($_POST['edit'])){
            Product::editProduct($id,$_POST);
        }
        return view('product.editProduct', compact('id'));
    }

    public function deleteProduct($id)
    {
        Product::deleteProduct($id);
        return redirect()->action('ProductController@showProduct');
    }

    public function productFilter()
    {
        $filter ='';
        if(isset($_POST['filter'])) {
            $filter = Product::filterProduct($_POST);
            if($filter->isEmpty()){
                $filter = '';
            }
        }
        return view('product.productFilter', compact('filter'));
    }
    public function categoryFilter()
    {
            $filter ='';
            if(isset($_POST['filterCat'])) {
                $filter = Product::filterCategory($_POST);
                if($filter->isEmpty()){
                    $filter = '';
                }
            }
        return view('product.categoryFilter', compact('filter'));
    }
}
