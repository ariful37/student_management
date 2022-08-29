<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('AyId')->nullable()
                  ->constrained('academic_years')
                  ->onDelete('cascade');
            $table->foreignId('ClassId')->nullable()
                    ->constrained('classes')
                    ->onDelete('cascade');
            $table->foreignId('SectionId')->nullable()
                    ->constrained('sections')
                    ->onDelete('cascade');
            $table->string('StudentName',100);
            $table->string('StudentCode')->unique();
            $table->string('RollNo',40)->nullable();
            $table->string('SmsNumber',15)->nullable();
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
        Schema::dropIfExists('students');
    }
}
