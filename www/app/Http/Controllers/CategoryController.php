<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function show()
    {
        if (isset($_POST['create'])) {
            return redirect()->action('CategoryController@create');
        }
        $allCategory = Category::all();
        return view('category.show', compact('allCategory'));
    }

    public function create()
    {
        $allCategory = Category::all();
        if (isset($_POST['create'])) {
            $id = Category::getId($_POST);
            Category::addUser($_POST,$id +1);

        }
        return view('category.create', compact('allCategory'));
    }

    public function oneCategory($id)
    {
        $category = Category::getCategory($id);
        $status = $category->status;
        $product = Product::detProductByCategory($category->name);
        return view('category.oneCategory', compact('category', 'status','product'));
    }

    public function edit($id)
    {
        if(isset($_POST['edit'])){
            Category::edit($id,$_POST);
        }
        return view('category.edit', compact('id'));
    }

    public function delete($id)
    {
        $category = Category::getCategory($id);
        Product::deleteProductByCategory($category->name);
        Category::deleteCategory($id);
        return redirect()->action('CategoryController@show');
    }
}
