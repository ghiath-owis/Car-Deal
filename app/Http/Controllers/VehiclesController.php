<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Http\Resources\VehicleResource;
use App\Http\Helpers;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //all
    {
        $vehicle=Vehicle::all();
        return view ('admin.vehicle.all',compact('vehicle')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    //add
    {
        return view('admin.vehicle.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle;
        $vehicle -> fill($request->all());
        $vehicle -> save();

         return redirect('/vehicle.all');
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
        $vehicle = Vehicle::where('id','=',$id)->first();
        return view('admin.vehicle.edit',compact('vehicle'));

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
        $vehicle = Vehicle::find($id);
        $vehicle -> description= $request->description;
        $vehicle -> is_available= $request->is_available;
        $vehicle -> engine_force= $request->engine_force;
        $vehicle -> fuel= $request->fuel;
        $vehicle -> kilometrage= $request->kilometrage;
        $vehicle -> max_speed= $request->max_speed;
        $vehicle -> status= $request->status;
        $vehicle -> price= $request->price;
        $vehicle -> rent_price= $request->rent_price;
        $vehicle -> has_offer= $request->has_offer;
        $vehicle -> price_after_offer= $request->price_after_offer;
        $vehicle -> origin_country= $request->origin_country;
        $vehicle -> year= $request->year;
        $vehicle -> transmission= $request->transmission;
        $vehicle -> interior_color= $request->interior_color;
        $vehicle -> exterior_color= $request->exterior_color;
        $vehicle -> body= $request->body;

        $special_offer ->save();

        return redirect('/vehicle.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect('/vehicle.all');
    }
}
