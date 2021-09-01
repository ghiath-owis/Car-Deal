<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\Brand;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $vehicles=Vehicle::all();
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('index')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }

    

    public function about_us()
    {
        return view ('about_us');
    }

    public function change_password()
    {
        return view ('change_password');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function favourite_products()
    {
        return view ('favourite_products');
    }

    
    

    public function product_listing()
    {
        return view ('product_listing');
    }

    public function product_listing_detail()
    {
        return view ('product_listing_detail');
    }

    
    
    public function search()
    {
        return view ('search');
    }

    
    public function services()
    {
        return view ('services');
    }

    public function shopping_cart()
    {
        return view ('shopping_cart');
    }

    public function sign_in()
    {
        return view ('signin');
    }

    public function sign_up()
    {
        return view ('signup');
    }

    public function terms_and_conditions()
    {
        return view ('terms_and_conditions');
    }

    

    public function user_profile()
    {
        return view ('user_profile');
    }

   







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
