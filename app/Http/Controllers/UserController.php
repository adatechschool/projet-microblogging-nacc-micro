<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
// fonction index qui permet l'affichage de tous les utilisateurs
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'biography' => 'nullable|string|max:500',
        ]);

        $user = $request->user();

        $user->biography = $request->input('biography');
        $user->save();

        // Rediriger avec un message de succès
        /*  return redirect()->back()->with('success', 'Biographie mise à jour avec succès.'); */
        return view('dashboard', compact('user'));
    }
}