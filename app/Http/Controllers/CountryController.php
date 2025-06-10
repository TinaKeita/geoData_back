<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'area_km2' => 'required|numeric',
            'population' => 'required|integer',
        ]);

        Country::create($data);

        return redirect()->route('countries.index')->with('success', 'Valsts veiksmīgi izveidota.');
    }

    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'area_km2' => 'required|numeric',
            'population' => 'required|integer',
        ]);

        $country->update($data);

        return redirect()->route('countries.index')->with('success', 'Valsts veiksmīgi atjaunināta.');
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Valsts veiksmīgi dzēsta.');
    }
        
    // public function apiIndex(): JsonResponse
    // {
    //     $countries = Country::all(); // Iegūst visas valstis no datubāzes
    //     return response()->json($countries); // Atgriež valstis JSON formātā
    // }
    public function apiIndex() {
        return Country::all();
    }
}
