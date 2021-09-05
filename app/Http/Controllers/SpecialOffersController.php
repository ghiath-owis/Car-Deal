<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;
use App\Http\Resources\SpecialOfferResource;
use App\Http\Helpers;


class SpecialOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //all
    {
        $special_offer=SpecialOffer::all();
        return view ('admin.special_offer.all',compact('special_offer')); 
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    //add
    {
        return view('admin.special_offer.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $special_offer = new SpecialOffer;
        $special_offer -> fill($request->all());
        $special_offer -> save();


        return redirect('/offer.all');
        // return redirect()->route('all-special_offers');
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
        $special_offer = SpecialOffer::where('id','=',$id)->first();
        return view('admin.special_offer.edit',compact('special_offer'));


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
        $special_offer = SpecialOffer::find($id);
        $special_offer -> description= $request->description;
        $special_offer -> ratio= $request->ratio;
        $special_offer -> start_date= $request->start_date;
        $special_offer -> end_date= $request->end_date;

        $special_offer ->save();

        return redirect('/offer.all');
        // return redirect()->route('all-special_offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $special_offer = SpecialOffer::find($id);
        $special_offer->delete();
        return redirect('/offer.all');
    }
}
