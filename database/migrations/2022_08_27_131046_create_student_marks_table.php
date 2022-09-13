<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_marks', function (Blueprint $table) {
            $table->id();
            $table->integer('StudentId')->nullable();
            $table->integer('AyId')->nullable();
            $table->integer('ClassId')->nullable();
            $table->integer('SubjectId')->nullable();
            $table->integer('ExampNameId')->nullable();
            $table->integer('RollNo')->nullable();
            $table->double('Subjective')->nullable();
            $table->double('Objective')->nullable();
            $table->double('Obtained')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_marks');
    }
}
