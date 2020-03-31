<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $arr['categories'] = Category::all();
        return view('admin.categories.index')->with($arr);
    }

    //details of the category
    public function detail($id)
    {
        $cat = Category::find($id);
        echo $cat->title;
    }
}