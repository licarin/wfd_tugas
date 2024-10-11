<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events; // Pastikan nama model sesuai
use App\Models\Organizers; // Pastikan nama model sesuai
use App\Models\Event_Categories; // Pastikan nama model sesuai

class MasterEventController extends Controller
{
    public function index()
    {
        $masterEvents = Events::with('organizer')->get(); 
        return view('masterEvents.index', compact('masterEvents'));
    }

    public function create()
    {
        $organizers = Organizers::all(); 
        $categories = Event_Categories::all(); 
        return view('masterEvents.create', compact('organizers', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'venue' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'description' => 'required',
            'booking_url' => 'nullable|url',
            'tags' => 'required',
            'organizer_id' => 'required|exists:organizers,id',
            'category_id' => 'required|exists:event_categories,id',
        ]);

        Events::create([
            'title' => $request->title,
            'venue' => $request->venue,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'description' => $request->description,
            'booking_url' => $request->booking_url,
            'tags' => $request->tags, 
            'organizer_id' => $request->organizer_id,
            'category_id' => $request->category_id,
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect()->route('master_events.index')->with('success', 'Events created successfully.');
    }

    public function show(string $id)
    {
        $masterEvent = Events::with(['organizer', 'category'])->findOrFail($id);
        return view('masterEvents.show', compact('masterEvent'));
    }


    public function edit(string $id)
    {
        $masterEvent = Events::findOrFail($id);
        $organizers = Organizers::all(); 
        $categories = Event_Categories::all(); 

        return view('masterEvents.edit', compact('masterEvent', 'organizers', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'venue' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'description' => 'required',
            'booking_url' => 'nullable|url',
            'tags' => 'required',
            'organizer_id' => 'required|exists:organizers,id',
            'category_id' => 'required|exists:event_categories,id',
        ]);

        $masterEvent = Events::findOrFail($id);
        $masterEvent->update([
            'title' => $request->title,
            'venue' => $request->venue,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'description' => $request->description,
            'booking_url' => $request->booking_url,
            'tags' => $request->tags,
            'organizer_id' => $request->organizer_id,
            'category_id' => $request->category_id,
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect()->route('master_events.index')->with('success', 'Events updated successfully.');
    }

    public function destroy(string $id)
    {
        $masterEvent = Events::findOrFail($id);
        $masterEvent->delete();
        
        return redirect()->route('master_events.index')->with('success', 'Events deleted successfully.');
    }
}
