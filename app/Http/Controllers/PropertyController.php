<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // This retrieves/ display all data
    public function index()
    {
        $properties = Property::all();

        return view('pages.property-details', compact('properties'));
    }


    public function show($id)
    {
        // Show specific property by ID
        $property = Property::findOrFail($id);

        return view('pages.property-details', compact('property'));
    }

    // Return to the form/HTML (Input fields) to create a new property
    public function create()
    {
        return view('pages.property-details');
    }

    // Stores the data's
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prop_title' => 'required|string|max:255',
            'prop_description' => 'required|string',
            'prop_price_per_night' => 'required|numeric',
            'prop_max_guest' => 'required|integer',
            'prop_room_count' => 'required|integer',
            'prop_bathroom_count' => 'required|integer',
            'prop_status' => 'required|string',
            'prop_address' => 'required|string',
            'prop_date_created' => 'required|date',
            'user_host_id' => 'required|integer|exists:users, id',
        ]);

        Property::create($validated);

        // return redirect()->route('properties.index')->with('success', 'Property created successfully!');
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);

        return view('pages.property-details', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'prop_title' => 'required|string|max:255',
            'prop_description' => 'required|string',
            'prop_price_per_night' => 'required|numeric',
            'prop_max_guest' => 'required|integer',
            'prop_room_count' => 'required|integer',
            'prop_bathroom_count' => 'required|integer',
            'prop_status' => 'required|string',
            'prop_address' => 'required|string',
            'prop_date_created' => 'required|date',
            'user_host_id' => 'required|integer|exists:users, id',
        ]);

        $property = Property::findOrFail($id);
        $property->update($validated);

        // return redirect()->route('properties.index')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        // return redirect()->route('properties.index')->with('success', 'Property deleted successfully!');
    }
}
