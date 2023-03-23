<?php

namespace App\Http\Controllers;

use App\Models\InfrastructureMotion;
use Illuminate\Http\Request;

class InfrastructureMotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Infrastructure = InfrastructureMotion::all(); //fetch all blog posts from DB
        return view('Infrastructure.index', [
            'Infrastructure' => $Infrastructure,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Infrastructure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newMotion = InfrastructureMotion::create([
            'motion' => $request->motion,
            'Description' => $request->Description,
            'Approve' =>0,
            'DisApprove' =>0,
        ]);
        return redirect('infrastructure/' . $newMotion->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(InfrastructureMotion $infrastructureMotion)
    {
        return view('Infrastructure.show', [
            'Infrastructure' => $infrastructureMotion,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfrastructureMotion $infrastructureMotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfrastructureMotion $infrastructureMotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfrastructureMotion $infrastructureMotion)
    {
        //
    }
}
