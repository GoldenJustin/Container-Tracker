<?php

namespace App\Http\Controllers;

use App\Models\container;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ContainerController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['container'] = Container::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.layouts.container.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['container'] = Container::all();
        return view('dashboard.layouts.container.create-container', $this->data);
    }

    public function validate_container(Request $request)
    {
        return $request->validate([
            'weight' => 'required|string|max:255',
            'size' => 'required|string',
            'number' => 'required|string|unique:containers',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $this->validate_container($request);
    
        try {
            DB::beginTransaction();
            $container = new Container();
            $container->fill($validate);
            $container->save();
            
            DB::commit();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Catch validation exception and return back with error message
            return back()->withErrors($e->validator)->withInput()
                         ->with('error', 'Container already Registered. Please Register a Different Container.');
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return back()->with('error', 'An error occurred while saving the container.');
        }
    
        return redirect()->route('container.index')->with('success', 'Container created successfully.');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(container $container)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(container $container)
    {
        //
    }
    public function delete(Request $request, Container $container)
    {
        $this->data['container'] = $container;
        $container->delete();
        return redirect()->route('container.index', $container)->with('success', 'Deleted');
    }
}
