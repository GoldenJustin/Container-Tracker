<?php

namespace App\Http\Controllers;

use App\Models\terminalToIcd;
use App\Models\Container;
use App\Models\Truck;
use App\Models\ICD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllocateController extends Controller
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
        return view('dashboard.layouts.allocate.index', $this->data);
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
        
        return view('dashboard.layouts.allocate.create-allocate')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $data = $request->except('_token');
        TerminalToIcd::create($data);
  

        return to_route('allocate.index')->with('success', 'terminalToIcd created successfully.');
    }

    // public function store(Request $request)



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
    public function edit(TerminalToIcd $terminalToIcd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TerminalToIcd $terminalToIcd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TerminalToIcd $terminalToIcd)
    {
        //
    }
}
