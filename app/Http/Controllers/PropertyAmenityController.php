<?php

namespace App\Http\Controllers;

use App\Models\PropertyAmenity;
use Illuminate\Http\Request;

class PropertyAmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyAmenities  = PropertyAmenity::all();

        // Wala pay views
        // return view()
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyAmenity $propertyAmenity)
    {
        // Wala pay views
        return view('PropertyAmenity.show', compact('propertyAmenity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Wala pay views
        // return view(compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amn_id' => 'required|integer',
        ]);

        PropertyAmenity::create($validated);

        return redirect()->route('property-amenities.index', $validated['prop_id'])
            ->with('success', 'Amenity added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyAmenity $propertyAmenity)
    {
        // Wala pay views
        // return view('PropertyAmenity.edit', compact('propertyAmenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyAmenity $propertyAmenity)
    {
        $validated = $request->validate([
            'amn_id' => 'required|integer',
        ]);

        $propertyAmenity->update($validated);

        return redirect()->route('property-amenities.index', $propertyAmenity->prop_id)
            ->with('success', 'Amenity updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyAmenity $propertyAmenity)
    {
        $propId = $propertyAmenity->prop_id;
        $propertyAmenity->delete();

        return redirect()->route('property-amenities.index', $propId)
            ->with('success', 'Amenity deleted successfully!');
    }
}
