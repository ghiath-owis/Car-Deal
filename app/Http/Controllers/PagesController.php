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

    
     public function special_offer()
    {   
        $vehicles=Vehicle::where('is_available', '=', '1')->where('has_offer','=','1')->paginate(2);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('special_offer_cars')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }

    public function product_listing()
    {   $vehicles=Vehicle::where('is_available','=','1')->paginate(9);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('product_listing')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }
    public function vehicle_buy()
    {   $vehicles=Vehicle::where('is_available','=','1')
        ->where('has_offer','=','0')
        ->where('service_type','=','buy')
        ->paginate(6);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('vehicle_buy')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }
    public function vehicle_rent()
    {   $vehicles=Vehicle::where('is_available','=','1')
        ->where('has_offer','=','0')
        ->where('service_type','=','rent')
        ->paginate(6);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('vehicle_rent')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }


    public function special_buy()
    {   $vehicles=Vehicle::where('is_available','=','1')
        ->where('has_offer','=','1')
        ->where('service_type','=','buy')
        ->paginate(6);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('special_buy')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }

    public function special_rent()
    {   $vehicles=Vehicle::where('is_available','=','1')
        ->where('has_offer','=','1')
        ->where('service_type','=','rent')
        ->paginate(6);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('special_rent')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
    }
    public function product_listing_detail($id)
    {   $vehicle=Vehicle::where('id','=',$id)->first();
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('product_listing_detail')->with("vehicle",$vehicle)->with("gallery",$gallery)->with('brands',$brands);;
    }

    
    
    public function search(Request $request)
    {   
        $vehicles=Vehicle::where('is_available','=','1')
        ->where('status','=',$request->status)
        ->where('brand_id','=',$request->brand_id)
        ->where('year','=',$request->year)
        ->where('service_type','=',$request->service)
        ->where('price_after_offer','<=',$request->rang_price)
        ->paginate(6);
        $gallery=Gallery::all();
        $brands=Brand::all();
        return view ('search')->with("vehicles",$vehicles)->with("gallery",$gallery)->with('brands',$brands);
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
