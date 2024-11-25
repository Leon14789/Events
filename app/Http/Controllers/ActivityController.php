<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Event;
use App\Services\StudentService;
use Exception;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $event = Event::findOrFail($id);
        $activities = $event->activities;
        return view('administrative.activitiesIndex', compact('event', 'activities'));
    }

    public function create($eventId)
    {
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
                'supervisor' => $request->supervisor,


            ]);
            $activity->save();
            return redirect()->route('list-activities', ['eventId' => $activity->event_id])
            ->with([ 'message' => 'Atividade cadastrada com sucesso!', 'class' => 'alert-success' ]);
        } catch (Exception $e) {
            return redirect()->route('dashboard')
            ->with([ 'message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger' ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        $students = $this->studentService->getStudentsByActivityId($id);

        return view('administrative.activity', compact('activity', 'students'));
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
            return redirect()->back()
            ->with([ 'message' => 'Atividade deletada com sucesso!', 'class' => 'alert-success' ]);
            
        } catch (Exception $e) {
            return redirect()->back()
            ->with([ 'message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger' ]);
        }
    }
}
