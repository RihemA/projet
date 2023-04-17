<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function propositions()
    {
        $events = Event::where('status', 'pending')->get();
        return view('admin.events.propositions', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->location = $request->location;
        $event->photo = $request->file('photo')
            ? $request->file('photo')->store('photos', 'public')
            : null;

        // Upload main photo and store its filename
        $photo = $request->file('photo');
        $photoFileName = time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('images'), $photoFileName);
        $event->photo = $photoFileName;

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $event->photos()->create([
                    'photo' => $photo->store('photos', 'public'),
                ]);
            }
        }
        $gallery = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryPhoto) {
                $galleryPhotoFileName =
                    time() . '-' . $galleryPhoto->getClientOriginalName();
                $galleryPhoto->move(
                    public_path('images'),
                    $galleryPhotoFileName
                );
                array_push($gallery, $galleryPhotoFileName);
            }
        }
        // Add main photo to the beginning of the gallery array
        array_unshift($gallery, $photoFileName);
        $event->gallery = $gallery;

        $event->save();

        return redirect()
            ->route('events.index')
            ->with('success', 'Event created successfully.');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->location = $request->location;
        if ($request->file('photo')) {
            Storage::disk('public')->delete($event->photo);
            $event->photo = $request->file('photo')->store('photos', 'public');
        }
        $event->save();

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $event->photos()->create([
                    'photo' => $photo->store('photos', 'public'),
                ]);
            }
        }

        return redirect()
            ->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    public function updateStatus(Request $request)
    {
        $id = $request->id;
        $event = Event::findOrFail($id);
        //$event->status = $request->status;
        $event->update(['status' => $request->status]);

        return redirect()
            ->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    public function rejectEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'rejected';
        $event->save();

        return redirect()
            ->route('events')
            ->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        //
        $event = Event::findOrFail($id);
        Storage::disk('public')->delete($event->photo);
        $event->photos()->delete();
        $event->delete();

        // return redirect()->route('admin.events')->with('success', 'Event deleted successfully.');
        return redirect()->back();
    }
}
