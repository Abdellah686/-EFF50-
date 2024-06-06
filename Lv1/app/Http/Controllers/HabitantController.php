<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitantRequest;
use App\Models\Habitant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HabitantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitants = Habitant::latest()->paginate(3);
        return view('habitants.index', compact('habitants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('habitants.create', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitantRequest $request)
    {
        // Handle the photo upload if provided
        $photoPath = $request->file('photo') ? $request->file('photo')
            ->store('photos', 'public') : null;

        // Create the new Habitant
        Habitant::create([
            'cin' => $request->cin,
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ville_id' => $request->ville_id,
            'photo' => 'storage/' . $photoPath,
        ]);

        return redirect('habitants')->with('success', 'Habitant created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habitant $id)
    {
        $habitant = Auth::guard('web')->user();

        if ($habitant->id !== $id) {
            return redirect('login');
        }

        // $cityId = $habitant->ville_id;
        // $habitantsInSameCity = Habitant::where('ville_id', $cityId)->get();

        return view('habitants.show', compact('habitant'));
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
