<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['driver'] = Driver::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layouts.driver.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['driver'] = Driver::all();
        return view('dashboard.layouts.driver.create-driver', $this->data);
    }

    public function validate_driver(Request $request){
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
        Driver::create($data);
        // $validate = $this->validate_driver($request);


        
        // try {
        //     DB::beginTransaction();
        //     $driver = new Driver();
        //     $driver->fill($validate);
        //     // dd($driver);
        //     $driver->save();

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     \Log::error($th->getMessage() . '' . $th->getTraceAsString());
        //     return back()->with('error', $th->getMessage());
        // }
        
        return to_route('driver.index')->with('success', 'driver created successfully.');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
