<?php

namespace App\Http\Controllers;

use App\Models\PoliticsMotion;
use Illuminate\Http\Request;

class politicsMotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Politics = PoliticsMotion::all(); //fetch all blog posts from DB
        return view('Politics.index', [
            'Politics' => $Politics,
        ]);  //returns the fetched posts
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Politics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newMotion = PoliticsMotion::create([
            'motion' => $request->motion,
            'Description' => $request->Description,
            'Approve' =>0,
            'DisApprove' =>0,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PoliticsMotion $politicsMotion)
    {
        return view('Politics.show', [
            'Politics' => $politicsMotion,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoliticsMotion $politicsMotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoliticsMotion $politicsMotion)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoliticsMotion $politicsMotion)
    {
        //
    }
}
