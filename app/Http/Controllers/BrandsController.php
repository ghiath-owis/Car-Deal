<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Resources\BrandResource;
use App\Http\Helpers;


class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    //all
    {

        $brand=Brand::all();
        return view ('admin.brand.all',compact('brand')); 

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    
    { $brand=Brand::all();

        return view('admin.brand.add')->with('brand',$brand);

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->model = $request->model;
        $logo = time() . '.' . $request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('Uploaded/image/brand'), $logo);
        $brand->logo = $logo;
        $brand -> save();

        return redirect('brand.all');
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
    public function edit($id)
    {

        $brand = Brand::where('id','=',$id)->first();
        return view('admin.brand.edit',compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand -> name= $request->name;
        $brand -> model= $request->model;
        $brand -> logo= "xc";

        $brand ->save();

        return redirect('/brand.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brand.all');
    }
}
