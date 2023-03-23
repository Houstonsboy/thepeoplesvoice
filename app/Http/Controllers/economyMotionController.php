<?php

namespace App\Http\Controllers;

use App\Models\EconomyMotion;
use Illuminate\Http\Request;

class economyMotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Economy = EconomyMotion::all(); //fetch all blog posts from DB
        return view('Economy.index', [
            'Economy' => $Economy,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Economy.create');
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
    public function show(EconomyMotion $economyMotion)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EconomyMotion $economyMotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EconomyMotion $economyMotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EconomyMotion $economyMotion)
    {
        //
    }
}
