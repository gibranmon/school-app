<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

    public static function getQuery() {
        $query = self::select('id', 'name', 'lastname', 'email', 'phone',
            'professional_license as professionalLicense');
        return $query;
    }

    public static function getTeacherLessons($id_teacher) {
        $query = self::select(
            'teacher_classes.group', 'teacher_classes.semester',
            'teacher_classes.id as id', 'classes.name', 'classes.elective')
            ->join('teacher_classes', 'teachers.id', '=', 'teacher_classes.teacher_id')
            ->join('classes', 'teacher_classes.class_id', '=', 'classes.id')
            ->where('teachers.id', $id_teacher);
        return $query;
    }

    public function lessons(): BelongsToMany {
        return $this->belongsToMany(Lesson::class, 'teacher_classes', 'teacher_id', 'class_id');
    }
}
