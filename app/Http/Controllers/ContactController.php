<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'telefoonnummer' => 'required|string|max:20',
            'emailadres' => 'required|email|max:255|unique:leads,emailadres',
            'omschrijving' => 'nullable|string',
            'bijlage' => 'nullable|file|max:2048',
            'akkoord_algemene_voorwaarden' => 'required|boolean',
        ]);

        if ($request->hasFile('bijlage')) {
            $validatedData['bijlage'] = $request->file('bijlage')->store('bijlagen');
        }

        Lead::create($validatedData);

        return redirect()->url('/contact');
    }
}
