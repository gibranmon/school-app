<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollment_students', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('in_progress');
            $table->decimal('final_score', 5, 2)->default(0);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('enrroll_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('enrroll_id')->references('id')->on('teacher_classes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_students');
    }
};
