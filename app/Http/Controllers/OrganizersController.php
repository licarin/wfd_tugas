<?php

namespace App\Http\Controllers;

use App\Models\Organizers; // Pastikan nama model sesuai
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Tambahkan jika perlu

class OrganizersController extends Controller
{
    public function index()
    {
        Log::info('Organizers index method called'); // Debugging
        $organizers = Organizers::all(); 
        return view('organizer.index', compact('organizers'));
    }

    public function create()
    {
        return view('organizer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'x_link' => 'nullable|url',
            'website_link' => 'nullable|url',
            'active' => 'boolean',
        ]);

        Organizers::create($validated);

        return redirect()->route('organizers.index')->with('success', 'Organizer created successfully.');
    }

    public function show(string $id)
    {
        $organizer = Organizers::findOrFail($id);
        return view('organizer.show', compact('organizer'));
    }

    public function edit(string $id)
    {
        $organizer = Organizers::findOrFail($id);
        return view('organizer.edit', compact('organizer'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'x_link' => 'nullable|url',
            'website_link' => 'nullable|url',
            'active' => 'boolean',
        ]);

        $organizer = Organizers::findOrFail($id);
        $organizer->update($validated);

        return redirect()->route('organizers.index')->with('success', 'Organizer updated successfully.');
    }

    public function destroy(string $id)
    {
        $organizer = Organizers::findOrFail($id);
        $organizer->delete();

        return redirect()->route('organizers.index')->with('success', 'Organizer deleted successfully.');
    }
}
