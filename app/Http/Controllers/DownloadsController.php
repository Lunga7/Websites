<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;

class DownloadsController extends Controller
{
    public function index()
    {
        $arr['arts'] = Art::paginate(5);
        return view('/download')->with($arr);
    }
}
