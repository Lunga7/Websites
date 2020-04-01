<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Art;

class ArtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['arts'] = Art::paginate(5);
        return view('admin.arts.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['categories'] = Category::all();
        return view('admin.arts.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Art $art)
    {
        if($request->image->getClientOriginalName())
        {
            $ext =  $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/arts',$file);
        }
        else
        {
            $file = '';
        }
        $art->category_id = $request->category_id;
        $art->title = $request->title;
        $art->image = $file;
        $art->description = $request->description;
        $art->save();
        return redirect()->route('admin.arts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        $arr['arts'] = $art;
        $arr['categories'] = Category::all();
        return view('admin.arts.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        if(isset($request->image) && $request->image->getClientOriginalName())
        {
            $ext =  $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/arts',$file);
        }
        else
        {
            if(!$art->image)
                $file = '';
            else
                $file = $art->image;
        }
        $art->category_id = $request->category_id;
        $art->image = $file;
        $art->title = $request->title;
        $art->description = $request->description;
        $art->save();
        return redirect()->route('admin.arts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        $art->delete();
        return redirect()->route('admin.arts.index');
    }
}
