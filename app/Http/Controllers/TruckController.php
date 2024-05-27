<?php

namespace App\Http\Controllers;

use App\Models\truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['truck'] = Truck::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layouts.truck.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['truck'] = Truck::all();
        return view('dashboard.layouts.truck.create-truck', $this->data);
    }

    public function validate_truck(Request $request){
        return $request->validate([
            'fullName' => 'required|string|max:255',
            'licenseNo' => 'required|string',
            'phone' => 'required|integer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        
        // dd($request->all());

      $data= $request->except('_token');
        Truck::create($data);
        // $validate = $this->validate_truck($request);


        
        // try {
        //     DB::beginTransaction();
        //     $truck = new Truck();
        //     $truck->fill($validate);
        //     // dd($truck);
        //     $truck->save();

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     \Log::error($th->getMessage() . '' . $th->getTraceAsString());
        //     return back()->with('error', $th->getMessage());
        // }
        
        return to_route('truck.index')->with('success', 'truck created successfully.');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Truck $truck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        //
    }
}
