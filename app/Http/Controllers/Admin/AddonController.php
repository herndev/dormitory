<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addon;

class AddonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addons = Addon::all();
         return view('admin.addons.index', compact('addons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Addon::create([
            'name' => $request->name,
            'status' => $request->status,
            
        ]);

        return to_route('admin.addons.index')->with('success', 'Addons created successfully.');
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
    public function edit(Addon $addons)
    {
        return view('admin.addons.edit', compact('addons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddonStoreRequest $request, Addon $addons) 
    {
         $addons->update($request->validated());

        return to_route('admin.addons.index')->with('success', 'Addons updated successfully.');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addon $addons)
    {
        $table->reservations()->delete();
        $addons->delete();

        return to_route('admin.addons.index')->with('danger', 'Addons deleted successfully.');
    }
}
