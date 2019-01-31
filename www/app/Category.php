<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function addUser($post, $nesting_level=0)
    {
        $category = new Category;
        $category->name = $post['nameCategory'];
        $category->status = 1;
        $category->nesting_level = $nesting_level;
        $category->parent = $post['value'];
        $category->save();
    }
    public static function getId($post)
    {
        if($post['value'] == 'нету родителя'){
            return -1;
        }
        $id =  Category::where('name', '=', $post['value'])->first();
        return $id->nesting_level;
    }

    public static function getCategory($id)
    {
        return Category::find($id);
    }

    public static function deleteCategory($id)
    {
        $obj = Category::find($id);
        $obj->delete();
    }
    public static function edit($id,$post)
    {

        if($post['dzen'] == 'active'){
            $status = 1;
        }else{
            $status = 0;
        }
        $obj = Category::find($id);
        $obj->name = $post['nameCategory'];
        $obj->status = $status;
        $obj->save();
    }
}
