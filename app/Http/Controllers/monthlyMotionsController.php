<?php

namespace App\Http\Controllers;

use App\Models\monthlyMotions;
use Illuminate\Http\Request;

class monthlyMotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motion = monthlyMotions::all(); //fetch all blog posts from DB
        return $motion; //returns the fetched posts
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
      
    }

    /**
     * Display the specified resource.
     */
    public function show(monthlyMotions $monthlyMotions)
    {
        return $monthlyMotions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(monthlyMotions $monthlyMotions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, monthlyMotions $monthlyMotions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(monthlyMotions $monthlyMotions)
    {
        //
    }
}
