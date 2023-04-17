<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
        $ideas = Idea::paginate(6);
        // dd($ideas);
        return view('front.ideas.index', ['ideas' => $ideas]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        //
        return view('front.ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $idea = new Idea;
        $idea->title = $request->title;
        $idea->description = $request->description;
        $idea->start_time = $request->start_time;
        $idea->end_time = $request->end_time;
        $idea->location = $request->location;
        $idea->photo = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;
        $idea->user_id = Auth()->user()->id;
        $idea->save();

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $idea->photos()->create([
                    'photo' => $photo->store('photos', 'public')
                ]);
            }
        }

        return redirect()->route('ideas')->with('success', 'Idea created successfully.');
    }

    public function show($id)
    {
        //
        $idea = Idea::findOrFail($id);
        return view('front.ideas.show', $idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $idea = Idea::findOrFail($id);
        Storage::disk('public')->delete($idea->photo);
        $idea->photos()->delete();
        $idea->delete();

        // return redirect()->route('admin.ideas')->with('success', 'Idea deleted successfully.');
        return redirect()->back();
    }
}
