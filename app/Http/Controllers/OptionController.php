<?php

namespace App\Http\Controllers;

use App\Models\Category;

class OptionController extends Controller
{
    public function index(){
        $category = Category::with('sub_category','sub_category.sub_sub_category')->get();
        return response()->json($category);
    }
}
