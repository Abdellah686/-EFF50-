<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Ville;
use App\Notifications\HabitantNotification;
use Illuminate\Http\Request;

class HabitantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitants=Habitant::all();
        return view('habitants.index',compact('habitants'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $habitants=Habitant::all();
        return view('habitants.create',compact('habitants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Habitant::create([
            'cin' => $request->cin,
            'nom' => $request->nom,
            'email' => $request->email,
            'ville_id' => $request->ville_id,
            'photo' => $request->photo,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
