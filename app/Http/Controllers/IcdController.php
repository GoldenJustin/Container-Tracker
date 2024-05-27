<?php

namespace App\Http\Controllers;

use App\Models\icd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class icdController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['icd'] = icd::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layouts.icd.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['icd'] = icd::all();
        return view('dashboard.layouts.icd.create-icd', $this->data);
    }

    public function validate_icd(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
            'containerCapacity' => 'required|integer',
            'availableTrucks' => 'required|integer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $data= $request->except('_token');
        icd::create($data);
        // $validate = $this->validate_icd($request);

        // try {
        //     DB::beginTransaction();
        //     $icd = new icd();
        //     $icd->fill($validate);
        //     dd($icd);
        //     $icd->save();

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     \Log::error($th->getMessage() . '' . $th->getTraceAsString());
        //     return back()->with('error', $th->getMessage());
        // }
        return to_route('icd.index')->with('success', 'icd created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(icd $icd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(icd $icd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, icd $icd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(icd $icd)
    {
        //
    }
    public function delete(Request $request, icd $icd)
    {
        $this->data['icd'] = $icd;
        $icd->delete();
        return redirect()->route('icd.index', $icd)->with('success', 'Deleted');
    }
}
