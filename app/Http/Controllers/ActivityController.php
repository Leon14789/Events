<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function create($eventId) {
        return view('administrative.createActivity', ['eventId' => $eventId]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $activity = Activity::create([
                'name' => $request->name,
                'date' => $request->date,
                'hours' => $request->hours,
                'description' => $request->description,
                'vacancies' => $request->vacancies,
                'event_id' => $request->event_id,
                'vacancies_filled' => $request->vacancies_filled,
                'supervisor' => $request->supervisor,

                
            ]);
            $activity->save();
            return redirect()->route('list-activity', ['eventId' => $activity->event_id]);
    
           } catch (Exception $e) {
                return redirect()->route('dashboard');
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        $activities = $event->activities;
        return view('administrative.activitiesIndex', compact('event', 'activities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            $activity = Activity::find($id);
            $activity->delete();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
