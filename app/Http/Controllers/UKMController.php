<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use Illuminate\Http\Request;

class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'ukm';
        return view('ukm.index',  compact('active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UKM $uKM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UKM $uKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UKM $uKM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UKM $uKM)
    {
        //
    }
}
