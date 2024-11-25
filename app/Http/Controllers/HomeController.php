<?php

namespace App\Http\Controllers;
use App\Services\StudentService;
use App\Models\Activity;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $studentService;
    
    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        return view('home', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        $activities = $event->activities;
        return view('student.activitiesIndex', compact('event', 'activities'));
    }

    public function activityDetails(string $id)
    {
        $activity = Activity::findOrFail($id);
        $students =  $this->studentService->getStudentsByActivityId($id);

        return view('student.activityDetails', compact('activity', 'students'));
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
        //
    }
}
