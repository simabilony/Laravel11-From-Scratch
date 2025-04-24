<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $allCategories = ['Category 1', 'Category 2'];
     //        $allCategories = DB::table('categories')->get(); // query builder
        $allCategories = Category::all();
        return view('home', ['categories' => $allCategories]);
    }
}
