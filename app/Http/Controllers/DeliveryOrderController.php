<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\customer;
use App\Models\deliveryOrder;
use App\Models\truck;
use Illuminate\Http\Request;

class DeliveryOrderController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['deliveryOrder'] = deliveryOrder::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['deliveryOrder'] = deliveryOrder::all();
        return view('dashboard.layouts.delivery.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["containers"] =  Container::all();
        $viewData["customers"] =  customer::all();
        $viewData["trucks"] =  Truck::all();
        
        return view('dashboard.layouts.delivery.create-delivery')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token');
        deliveryOrder::create($data);
      
        return redirect(route('delivery.index'))->with('success', 'delivery Order created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(deliveryOrder $deliveryOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   $data_id = $id;
        return view('dashboard.layouts.delivery.create-delivery')->with('data_id', $data_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $viewData['deliveryOrder']=deliveryOrder::findOrFail($id);
        deliveryOrder::where('id', $id)->update([
            'arrivalDate'=> $request->arrival,
            'isArrived'=> $request->isArrived
        ]);

        return redirect(route('delivery.index'))->with('success-message', 'Container information updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(deliveryOrder $deliveryOrder)
    {
        //
    }
}
