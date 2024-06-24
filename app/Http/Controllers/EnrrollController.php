<?php

namespace App\Http\Controllers;

use App\Models\Enrroll;
use Illuminate\Http\Request;

class EnrrollController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $enrolledStudents = Enrroll::getEnrrollStudents($id)->get();
            return response()->json([
                'code' => 200,
                'message' => 'Estudiantes obtenidos con exito',
                'items' => $enrolledStudents
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'code' => 500,
                'message' => $th->getMessage(),
                'items' => []
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
