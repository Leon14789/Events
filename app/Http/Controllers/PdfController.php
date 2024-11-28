<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Event;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PdfController extends Controller
{
    
    public function storeRollCall($id)
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
        return $pdf->download('chamada-' . $data['activityName'] . '.pdf');
    }


    public function storeCertificate($id)
{
    $student = Student::findOrFail($id); 
    
    $activity = Activity:: where('id', $student->activity_id)->first();

    $event = Event::where('id', $activity->event_id)->first();

    $data = [
        'nameStudent' => $student->name,
        'activityName' => $activity->name, 
        'eventName' => $event->name, 
        'dateActivity' => $activity->date,
    ];

    $pdf = FacadePdf::loadView('Pdf.certificate', $data);
    return $pdf->download('certificado-' . $data['nameStudent'] . '-' . $data['activityName'] . '.pdf');

}

   
}
