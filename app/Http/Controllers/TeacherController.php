<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $teachers = Teacher::getQuery()->get();
            return response()->json(['code' => 200, 'message' => 'Maestros obtenidos con exito',
                'items' => $teachers]);
        } catch (\Throwable $th) {
            return response()->json(['code' => 500, 'message' => $th->getMessage()], 500);
        }
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
        //
        try {
            $teacher = Teacher::find($id);
            return response()->json(['code' => 200, 
                'message' => 'Maestro obtenido con exito',
                'item' => $teacher,
                'id' => $id
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['code' => 500, 
                'message' => $th->getMessage(),
                'item' => null
            ], 500);
        }
    }

    public function showClassesTeacher($id) {
        try {
            $lessons = Teacher::getTeacherLessons($id)->get();
            return response()->json(['code' => 200, 
                'message' => 'Clases del maestro obtenidas con exito',
                'items' => $lessons,
                'id' => $id
            ]);
        } catch (\Throwable $th) {
            return response()->json(['code' => 500, 
                'message' => $th->getMessage(),
                'items' => null
            ], 500);
        }
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
