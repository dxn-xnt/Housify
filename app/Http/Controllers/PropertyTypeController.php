<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyTypes = PropertyType::all();

        // Wala pay views
        // return view('property-type.index', compact('propertyTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('property_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prop_id' => 'required|integer|exists:properties,id',
            'type_id' => 'required|integer',
        ]);

        PropertyType::create($validated);

        return redirect()->route('property_types.index')
            ->with('success', 'Property type created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyType $propertyType)
    {
        // Wala pay views
        // return view('property-type.show', compact('propertyType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyType $propertyType)
    {
        // Wala pay views
        // return view('property-type.edit', compact('propertyType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyType $propertyType)
    {
        $validated = $request->validate([
            'prop_id' => 'required|integer|exists:properties,id',
            'type_id' => 'required|integer',
        ]);

        $propertyType->update($validated);

        // Redirect to the index page with a success message
//        return redirect()->route('property-types.index')
//            ->with('success', 'Property type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();

        // Redirect with a success message
//        return redirect()->route('property-types.index')
//            ->with('success', 'Property type deleted successfully!');
    }
}
