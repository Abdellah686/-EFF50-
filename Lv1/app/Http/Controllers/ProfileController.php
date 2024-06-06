<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(Habitant $id)
    {
        $habitant = Auth::guard('web')->user();
        return view('profile', ['habitant' => $habitant]);
        if ($habitant->id !== $id) {
            return redirect()->route('login');
        }
    }
}
