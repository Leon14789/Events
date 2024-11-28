<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $activity = Activity::findOrFail($id);
        $students = Student::where('activity_id', $id)->get();
        
        $data = [
            'activityName' => $activity->name, 
            'students' => $students,
            'supervisor' => $activity->supervisor,
            'date' => now()->format('d/m/Y'),
        ];

        $pdf = FacadePdf::loadView('Pdf.roll-call', $data);
        return $pdf->download('chamada.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
