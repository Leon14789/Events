<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
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
    public function create( $activityId)
    {
        return view('student.registerStudent', ['activity_Id' => $activityId]);
    }

    public function store(Request $request)
    {

        Student::create($request->all());
        return redirect()->route('activity-details', ['activityId' => $request->activity_id])
        ->with([ 'message' => 'Cadastro realizado com sucesso!', 'class' => 'alert-success' ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::where('activity_id', $id)->get();
        return $students;
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
            $student = Student::find($id);
            $student->delete();
            return redirect()->back()
            ->with([ 'message' => 'Aluno deletado com sucesso!', 'class' => 'alert-success' ]);
        } catch (Exception $e) {
            return redirect()->back()
            ->with([ 'message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger' ]);

        }
    }
}
