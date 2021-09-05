<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestTable;
use App\Models\Brand;
use App\Http\Resources\RequestTableResource;
use App\Http\Helpers;
use App\Models\Vehicle;

class RequestsTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {   $brands=Brand::all();
        $request_table=RequestTable::with('Client','Vehicle')->where('id','>','0')->paginate(10);
        return view ('admin.request_table.all',compact('request_table','brands'));

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

    public function request_buy_create($id)
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validation vehicle id.
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
        ]);

        RequestTable::create([
            'date'       => time(),
            'type'       => $request->type,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'client_id'  => auth()->user()->id,
            'vehicle_id' => $request->vehicle_id
        ]);

        return redirect()->back()->with('success', 'Order sended successfully.');
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

    public function proccessRequest(Request $request, $requestId) {

        $request->validate([
            'status' => 'required|in:' . implode(',', [0, 1])
        ]);

        $order = RequestTable::find($requestId);

        if (!$order) {
            return back()->withErrors('Order NOT found!');
        }

        $vehicle = Vehicle::find($order->vehicle_id);

        // check if versions are equal.
        if ($vehicle->version != $request->version) {
            return redirect()->back()->withErrors('Sorry, this vehicle in not available!');
        }

        $vehicle->version++;

        $vehicle->save();

        $order->status = $request->status;

        $order->save();

        return redirect()->route('all-request')->with('success', 'Order proccessed successfully.');
    }

}
