<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\Brand;
use App\Models\SpecialOffer;
use App\Models\ReportStatus;
use App\Models\FavoriteVehicle;
use Auth;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $gallery = Gallery::all();
        $brands = Brand::all();
        return view('index')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }



    public function about_us()
    {
        return view('about_us');
    }

    public function change_password()
    {
        return view('change_password');
    }

    public function contact()
    {
        return view('contact');
    }

    public function favourite_products()
    {$gallery = Gallery::all();
        $brands = Brand::all();
        $favo=FavoriteVehicle::where('client_id','=',Auth::guard('client')->user()->id)->get();
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->paginate(6);

        return view('favourite_products')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands)->with('favo', $favo);
    }

    public function add_favourite($id)
    {  $favo=FavoriteVehicle::where('client_id','=',Auth::guard('client')->user()->id)
        ->where('vehicle_id','=',$id)->first();
        if($favo)
        {
            return back();
        }
        else{
            $fav=new FavoriteVehicle;
                $fav->client_id=Auth::guard('client')->user()->id;
                $fav->vehicle_id=$id;
                $fav->save();
                return back();

        }

    }

    public function special_offer()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();
        $dt = now()->toDateString();
        $veh = Vehicle::where('is_available', '=', '1')->where('has_offer', '=', '1')->paginate(6);
        foreach ($veh as $vehicle) {
            $offer = SpecialOffer::where('id', '=', $vehicle->special_offer_id)->first();
            $edt = $offer->end_date;
            if ($edt < $dt) {

                $vehicle-> price_after_offer=$vehicle-> price;
                $vehicle->has_offer = 0;
                $vehicle->save();
            }
        }
        $vehicles = Vehicle::where('is_available', '=', '1')->where('has_offer', '=', '1')->paginate(6);

        return view('special_offer_cars')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }

    public function product_listing()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();
        $dt = now()->toDateString();
        $veh = Vehicle::where('is_available', '=', '1')->where('has_offer', '=', '1')->paginate(6);
        foreach ($veh as $vehicle) {
            $offer = SpecialOffer::where('id', '=', $vehicle->special_offer_id)->first();
            $edt = $offer->end_date;
            if ($edt < $dt) {

                $vehicle-> price_after_offer=$vehicle-> price;
                $vehicle->has_offer = 0;
                $vehicle->save();
            }
        }
        $vehicles = Vehicle::where('is_available', '=', '1')->paginate(6);
        return view('product_listing')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }
    public function vehicle_buy()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->where('has_offer', '=', '0')
            ->where('service_type', '=', 'buy')
            ->paginate(6);
        return view('vehicle_buy')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }
    public function vehicle_rent()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->where('has_offer', '=', '0')
            ->where('service_type', '=', 'rent')
            ->paginate(6);
        return view('vehicle_rent')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }


    public function special_buy()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();
        $dt = now()->toDateString();
        $veh = Vehicle::where('is_available', '=', '1')->where('has_offer', '=', '1')->paginate(6);
        foreach ($veh as $vehicle) {
            $offer = SpecialOffer::where('id', '=', $vehicle->special_offer_id)->first();
            $edt = $offer->end_date;
            if ($edt < $dt) {
                $vehicle-> price_after_offer=$vehicle-> price;
                $vehicle->has_offer = 0;
                $vehicle->save();
            }
        }
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->where('has_offer', '=', '1')
            ->where('service_type', '=', 'buy')
            ->paginate(6);
        return view('special_buy')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }

    public function special_rent()
    {
        $gallery = Gallery::all();
        $brands = Brand::all();

        $dt = now()->toDateString();
        $veh = Vehicle::where('is_available', '=', '1')->where('has_offer', '=', '1')->paginate(6);
        foreach ($veh as $vehicle) {
            $offer = SpecialOffer::where('id', '=', $vehicle->special_offer_id)->first();
            $edt = $offer->end_date;
            if ($edt < $dt) {

               $vehicle-> price_after_offer=$vehicle-> price;
                $vehicle->has_offer = 0;

                $vehicle->save();
            }
        }
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->where('has_offer', '=', '1')
            ->where('service_type', '=', 'rent')
            ->paginate(6);
        return view('special_rent')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }
    public function product_listing_detail($id)
    {
        $vehicle = Vehicle::where('id', '=', $id)->first();
        $gallery = Gallery::all();
        $brands = Brand::all();
        return view('product_listing_detail')->with("vehicle", $vehicle)->with("gallery", $gallery)->with('brands', $brands);;
    }



    public function search(Request $request)
    {
        $vehicles = Vehicle::where('is_available', '=', '1')
            ->where('status', '=', $request->status)
            ->where('brand_id', '=', $request->brand_id)
            ->where('year', '=', $request->year)
            ->where('service_type', '=', $request->service)
            ->where('price_after_offer', '<=', $request->rang_price)
            ->where('price_after_offer', '>', 0)
            ->paginate(6);
        $gallery = Gallery::all();
        $brands = Brand::all();
        return view('search')->with("vehicles", $vehicles)->with("gallery", $gallery)->with('brands', $brands);
    }




    public function shopping_cart()
    {
        return view('shopping_cart');
    }

    public function sign_in()
    {
        return view('signin');
    }

    public function sign_up()
    {
        return view('signup');
    }

    public function terms_and_conditions()
    {
        return view('terms_and_conditions');
    }


    public function report_of_requests()
    {
        $report=ReportStatus::where('client_id','=',Auth::guard('client')->user()->id)->get();
        return view('report_of_requests',compact('report'));
    }


    public function user_profile()
    {
        return view('user_profile');
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
