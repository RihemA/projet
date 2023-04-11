<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
        $events = Event::paginate(6);
        // dd($events);
        return view('front.events.index', ['events' => $events]);
    }

    public function subscribe(Request $request)
{
    $id = $request->id;
        $event = Event::findOrFail($id);
    //dd($id,$event);

    $user = auth()->user();
    $subscribers = Subscription::all(); // Get the currently authenticated user
    $subscription = Subscription::where('event_id', $id)
                            ->where('user_id', $user->id)
                            ->first();
// dd($subscription);
    // Check if the user is already subscribed to the event
    if ($subscription) {
        return redirect()->back()->with('error', 'You are already subscribed to this event.');
    }
    // Create a new subscription record for the user and event
    $subscription = new Subscription();
    $subscription->user_id = $user->id;
    $subscription->event_id = $id;
    $subscription->save();
    //auth()->user()->events()->attach($event);

    return redirect()->back()->with('success', 'You have successfully subscribed to this event!');
}

public function unsubscribe(Request $request)
{
    //auth()->user()->events()->detach($event);
    $id = $request->id;
    // dd($id);
    $subscription = Subscription::where('event_id',$id);
    $subscription->delete();
    return redirect()->back();
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    
    public function show($id)
    {
        //
        $user = auth()->user(); 
        // dd($user);
        $event = Event::findOrFail($id);
        $subscribers = Subscription::where('event_id', $id);
        $subscription = Subscription::where('event_id', $id)
                            ->where('user_id', $user->id)
                            ->first();
        //dd($subscribers);
        // dd($user,$event,$subscribers);
        //dd($event);
        $data = [
            'subscribers' => $subscribers,
            'event' => $event,
            'subscription' => $subscription
        ];
        return view('front.events.show', $data);
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
    }
}
