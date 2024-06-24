<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrroll extends Model
{
    use HasFactory;
    protected $table = 'enrollment_students';

    public static function getEnrrollStudents($id) {
        $query = self::select('students.*', 'final_score as finalScore', 'status')
            ->join('students', 'enrollment_students.student_id', '=', 'students.id')
            ->where('enrollment_students.enrroll_id', $id);
        return $query;
    }
}
