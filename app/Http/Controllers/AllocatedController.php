<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Truck;
use App\Models\ICD;
use App\Models\terminalToIcd;
use Illuminate\Http\Request;

class AllocatedController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['terminalToIcd'] = TerminalToIcd::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $this->data['terminalToIcd'] = TerminalToIcd::all();
        return view('dashboard.layouts.allocated.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {


        $viewData = [];
        $viewData["containers"] =  Container::all();
        $viewData["trucks"] =  Truck::all();
        $viewData["icds"] =  ICD::all();
        
        return view('dashboard.layouts.allocated.create-allocated')->with("viewData", $viewData);
    }

    // public function validate_terminalToIcd(Request $request){
    //     return $request->validate([
    //         'fullName' => 'required|string|max:255',
    //         'licenseNo' => 'required|string',
    //         'phone' => 'required|integer',
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        // dd($request->all());

        $data = $request->except('_token');
        TerminalToIcd::create($data);
     

        return to_route('allocated.index')->with('success', 'terminalToIcd created successfully.');
    }

    /**
     * Display the specified resource.
     */

    public function show(TerminalToIcd $terminalToIcd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   $data_id = $id;
        return view('dashboard.layouts.allocated.create-allocated')->with('data_id', $data_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $viewData['terminalToIcd']=terminalToIcd::findOrFail($id);
        terminalToIcd::where('id', $id)->update([
            'arrivalDate'=> $request->arrival,
            'isArrived'=> $request->isArrived
        ]);

        return redirect(route('allocated.index'))->with('success-message', 'Container information updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TerminalToIcd $terminalToIcd)
    {
        //
    }
}
