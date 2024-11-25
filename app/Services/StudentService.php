<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    /**
     * Retorna os estudantes de uma atividade.
     *
     * @param string $activityId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getStudentsByActivityId(string $activityId)
    {
        return Student::where('activity_id', $activityId)->get();
    }
}
