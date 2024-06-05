<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Ville;
use App\Notifications\HabitantNotification;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes=Ville::latest()->get();
        return view('villes.index',compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('villes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ville = Ville::create([
            'name' => $request->name
        ]);

        // Update the ville_id of all Habitants to the newly created Ville
        Habitant::query()->update(['ville_id' => $ville->id]);

        $habitants = Habitant::all();
        foreach ($habitants as $habitant) {
            $habitant->notify(new HabitantNotification($ville));
        }

        return redirect()->route('villes.index')->with('success', 'Ville created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ville = Ville::find($id);
        return view('villes.show', compact('ville'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ville = Ville::find($id);
        return view('villes.show', compact('ville'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ville = Ville::find($id);
        $ville->name = $request->name;
        $ville->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
